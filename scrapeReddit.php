<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as Eloquent;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => env('DB_HOST', 'localhost'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => ''

]);

$capsule->bootEloquent();

class Images extends Eloquent {

}

class ToProcess extends Eloquent {

}

class scrape {
    public function getSubredditLinks($subreddit) {
        $pagesScraped = 0;

        $after = "";
        $count = 0;
        $url = "https://www.reddit.com/r/$subreddit.json";

        $options = array(
            //'sort' => 'top',
            //'t' => 'all',
            'count' => &$count,
            'after' => &$after
        );

        while ($pagesScraped <= 1) {
            echo "Getting URL {$url}?" . http_build_query($options) . "\n";
            $json = file_get_contents($url."?".http_build_query($options));
            $json = json_decode($json);

            $count += count($json->data->children);

            foreach ($json->data->children as $red) {
                $entity = new ToProcess;
                $entity->url = $red->data->url;
                $entity->title = $red->data->title;

                $entity->save();

            }

            $after = $json->data->after;
            $pagesScraped += 1;
        }
    }

    // Checking the file exists requires downloading it
    // So we shall also do this in the following method
    //$new_image = $this->checkFileExists($red->data->url);

    //if ($new_image) {
    //    $this->sortImage($new_image);
    //}

    public function checkFileExists($url) {
        $ext = pathinfo($url, PATHINFO_EXTENSION);
        $unique_id = uniqid();
        $image_path = "tugtug_files/tmp/$unique_id.$ext";

        file_put_contents($image_path, file_get_contents($url));
        $md5_hash = md5_file($image_path);
        $md5_result = Images::where('md5', $md5_hash)->first();

        if(is_null($md5_result) && $ext) {
            return array(
                "path" => $image_path,
                "md5" => $md5_hash,
                "id" => $unique_id,
                "ext" => $ext
            );
        } else {
            echo "Image already exists!\n";
            unlink($image_path);
            return false;
        }
    }

    public function sortImage($image) {
        $sorted_image = new Images;
        $sorted_image->filename = $image["id"];
        $sorted_image->md5 = $image["md5"];
        $sorted_image->extension = $image["ext"];
        $sorted_image->save();

        $exp_name = str_split($image["md5"]);

        $new_image_dir = "tugtug_files/images/" . $exp_name[0] . '/' .  $exp_name[1] . '/';

        if (!is_dir($new_image_dir)) {
            mkdir($new_image_dir, 0755, true);
        }

        $new_image_filename = sprintf("%s%s%s.%s", $new_image_dir, substr($image['md5'], 0, 4), $image['id'], $image['ext']);

        rename($image["path"], $new_image_filename);

        $this->createThumbnail($new_image_filename);
    }

    public function createThumbnail($filename) {
        ;
    }
}

$x = new scrape;
$x->getSubredditLinks("");
