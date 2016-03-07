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
            .header {
                font-family: 'Lato';
                border-bottom: 1px solid #e5e5e5;
            }

            .search-row, .image-row {
                margin-top: 10px;
            }

            .format {
                background-color: rgba(230, 175, 44, 0.7);
                bottom: 5px;
                left: 20px;
                border: 1px solid #ce991b;
                border-width: 1px 1px 0px 0px;
                position: absolute;
                text-align: center;
                width: 30px;
                color: #a3770f;
                font-size: 8pt;
            }

            .footer {
                border-top: 1px solid #e5e5e5;
                color: #777;
                padding-top: 19px;
                margin-top: 20px;
            }

    </style>
    </head>
    <body>
        <div class="container">
            <div class="header ">
                <h3>TugTug</h3>
            </div>
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
                    <div class="format">
                        <span>jpg</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="format">
                        <span>gif</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="format">
                        <span>jpg</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="format">
                        <span>gifv</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
            </div>

            <div class="row image-row">
                <div class="col-md-3">
                    <div class="format">
                        <span>mp4</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=450%C3%97450&w=450&h=450" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="format">
                        <span>jpg</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="format">
                        <span>jpg</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=550%C3%97550&w=550&h=550" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="format">
                        <span>jpg</span>
                    </div>
                    <div class="image">
                        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97350&w=350&h=350" class="img img-responsive img-thumbnail" alt="Responsive image">
                    </div>
                </div>
            </div>


            <footer class="footer">
                <nav>
                    <ul class="nav nav-pills">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Upload</a></li>
                    </ul>
                </nav>
            </footer>


        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>