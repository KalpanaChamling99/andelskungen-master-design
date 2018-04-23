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

        <?php
         
            $links = array(
                        "menu-icon"=>"menu icon",
                        "title"=>"title",
                        "button"=>"button",
                        "call-to-action"=>"call to action",
                        "search-field"=>"search field",
                        "buy-field"=>"buy field",
                        "welcome-block"=>"welcome block",
                        "footer-banner"=>"footer banner",
                        "info"=>"info",
                        "podcast"=>"podcast",
                        "post"=>"post",
                        "table"=>"table",
                        "tipster-image"=>"tipster image",
                    );

            $title= array_values($links);
            $links=array_keys($links);

        ?>
        <input type="checkbox" id="menu" hidden>
        <div id='menu-section'>
            <div class="evit-menu">
              
                <ul class='menu'>
                    <?php
                        $state = true;
                            for($i=0;$i<count($links);$i++){
                    ?>
                        
                        <li 
                            <?php 
                                if($state){
                                echo 'class="active"';
                                $state = false;
                            }
                            ?>
                        >
                            <a href="#<?php echo $links[$i]?>"><?php echo $title[$i]; ?></a>
                        </li>    
                    <?php
                        }
                    ?>

                </ul>
            </div>
        </div>


        <div class="pages-section">
            <header>
                <label for="menu">
                    <div class="evit-menu-icon">
                        <span></span>
                    </div>     
                </label>
            </header>