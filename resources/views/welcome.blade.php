<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TugTug</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>

            body {

            }

            .header {
                font-family: 'Lato';
                border-bottom: 1px solid #e5e5e5;
            }

            .search-row, .image-row {
                margin-top: 10px;
            }

            .image {
                position: relative;
                display: block;
                width: 100%;  /* Change this */
                height: 300px; /* Change this */
                overflow: hidden;
            }

            .image img {
                position: absolute;
                width: 100%;
                left: -10px; /* Change this */
                top: -10px;  /* Change this */
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="header ">
                <h3>TugTug</h3>
            </div>
            <!--<nav>
                <ul class="nav nav-justified">
                    <li>
                        <a href="#">jpg</a>
                    </li>
                    <li>
                        <a href="#">gif</a>
                    </li>
                    <li>
                        <a href="#">mp4</a>
                    </li>
                </ul>
            </nav>-->
            <div class="row search-row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

            <div class="row image-row">
                <div class="col-md-3">
                    <div class="image">
                        <img src="images/10.jpg" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <img src="images/11.jpg" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <img src="images/9.jpg" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image">
                        <img src="images/7.jpg" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
            </div>


        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>