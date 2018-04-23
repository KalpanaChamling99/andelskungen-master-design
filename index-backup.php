<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Master Design</title>  
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/build/css/vendor.css">
        <link rel="stylesheet" href="assets/build/css/main.css">
    </head>

    <body>
        <input type="checkbox" id="menu" hidden>
        <div id='menu-section'>
            <div class="andels-menu">
                <ul class='menu'>
                    <li><a href="components/title.php">title</a></li>
                    <li><a href="#">news</a></li>
                    <li><a href="#">post</a></li>
                    <li><a href="#">table</a></li>
                    <li><a href="#">podcast</a></li>
                </ul>
            </div>
        </div>

        <div class="pages-section">
            <!-- <header>
                    <label for="menu">
                        <div class="andels-menu-icon">
                            <span></span>
                        </div>     
                    </label>
                </span>
            </header> -->
            <!-- menu icon -->
                <?php
                    require 'components/menu-icon.php';
                ?>
            <!--/ menu icon -->

            <!-- title -->
                <?php
                    // require 'components/title.php';
                ?>
            <!-- title -->

            <!-- call to action -->
                <?php 
                    require 'components/call-to-action.php';
                ?>
            <!-- /call to action -->

            <!-- search field -->
                <?php 
                    require 'components/search-field.php';
                ?>
            <!-- search field -->

            <!-- button -->
                <?php 
                    require 'components/button.php';
                ?>
            <!-- /button -->
            
            <!-- buy-field -->
                <?php 
                    require 'components/buy-field.php';
                ?>
            <!--/ buy-field -->

            <!-- welcome-block -->
                <?php
                    require 'components/welcome-block.php';
                ?>
            <!-- /welcome-block -->

            <!--info  -->
                <?php 
                    require 'layout/info.php';
                ?>
            <!--/info  -->

            <!-- footer-banner -->
                <?php
                    require 'layout/footer-banner.php';
                ?>
            <!--/ footer-banner -->

            <!-- tipster image -->
                <?php
                    require 'layout/tipster-image.php';
                ?>
            <!--/ tipster image -->

            <!-- post -->
                <?php
                    require 'layout/post.php';
                ?>
            <!--/ post -->

            <!-- podcast -->
                <?php
                    require 'layout/podcast.php';
                ?>
            <!-- /podcast -->

            <!-- table -->
                <?php
                    require 'layout/table.php';
                ?>
            <!--/ table -->
            <i class="fas fa-address-book"></i>
        </div>    

        <script src="assets/src/js/main.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    </body> 
    
</html>
