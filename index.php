<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="css/normalize.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="navbar navbar-default">

                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>                    
                </ul>
                
            </div>
        </div>

        <!--<div class="container-fluid">
            <div class="row">
                <div class="container-fluid" style="padding-top: 60px">
                <div class="col-md-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Filters</h1>                        
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                </div>-->

                <div class="col-md-4" style="padding-top: 60px">
                    <div class="thumbnail text-center">
                        <h1>Filters</h1>
                        <p>Basic Frame selection</p>
                        <a href="#" class="btn btn-success" role="button">Set Filter</a>
                    </div>                    
                </div>

                <div class="container col-md-8">
                    <?php

                    for ( $x = 0; $x < 2; $x++){
                        echo rowLoop();
                    }

                    ?>
                    <?php
                    function rowLoop(){
                        for ( $x = 0; $x < 3; $x++ ) {
                        echo images();
                        }
                    }
                    ?>
                    <?php
                    function images() {
                        echo '<div class="col-md-4" style="padding-top: 60px">
                                <img class="img-responsive" id="overlap" src="http://gallery.yopriceville.com/var/albums/Frames/Gold_Transparent_PNG_Photo_Frame.png?m=1399676400" alt="Mountain View" height="350" width="350">
                                <form style="padding-top: 20px">
                                    <label>
                                        <input type="checkbox">
                                        I want this!
                                    </label>
                                </form>
                            </div>';
                    }    
                    ?>
                    
                </div>
                <div class="container" style="padding-top: 20px">
                    <input class="btn btn-default" type="submit" value="Add to Cart">    
                </div>
                </div>
        </div>
        
        
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
    </body>
</html>