<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/App-Features-Carousel.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/index.css">
    
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="assets/img/logo2.png" alt="">
            </div>
            <div class="navbar">
                <ul>
                    <li><a  style="float: right; "href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
        </div>
        <div class="carousel">
           
            <script src="assets/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1300;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 111 css*/
        .jssorb111 .i {position:absolute;color:#fff;font-family:"Helvetica neue",Helvetica,Arial,sans-serif;text-align:center;cursor:pointer;z-index:0;}
        .jssorb111 .i .n {display:none;}
        .jssorb111 .i .b {fill:#fff;stroke:#000;stroke-width:500;stroke-miterlimit:10;stroke-opacity:.5;}
        .jssorb111 .i:hover .b {fill:#fea900;stroke:#fea900;stroke-width:6000;stroke-opacity:1;}
        .jssorb111 .iav .b {fill:#000;stroke-width:6000;stroke-opacity:1;}
        .jssorb111 .i.idn {opacity:.3;}
        .jssorb111 .iav .n, .jssorb111 .i:hover .n {display:block;}

        /*jssor slider thumbnail skin 121 css*/
        .jssort121 .p {position:absolute;top:0;left:0;border-bottom:1px solid rgba(255,255,255,.2);box-sizing:border-box;color:#fff;background:rgba(0,0,0,.1);opacity:.7;}
        .jssort121 .p .t {position:absolute;padding:10px;box-sizing:border-box;top:0;left:0;width:100%;height:100%;line-height:24px;overflow:hidden;}
        .jssort121 .p .i {margin-right:10px;position:relative;top:0;left:0;width:96px;height:48px;border:none;float:left;}
        .jssort121 .pav, .jssort121 .p:hover {color:#000;background:rgba(255,255,255,.7);}
        .jssort121 .p:hover {opacity:.75;}
        .jssort121 .pav, .jssort121 .p:hover.pdn {opacity:1;}
        .jssort121 .ti {position:relative;font-size:14px;font-weight:bold;}
        .jssort121 .d {position:relative;font-size:12px;}
        /*.jssort121 .d:before {content:'\a';white-space:pre;}*/
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen --><div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="assets/img/022.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="assets/img/022-s96x48.jpg" />
                    <span class="ti">Title</span><br />
                    <span class="d">Slide Description</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="assets/img/023.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="assets/img/023-s96x48.jpg" />
                    <span class="ti">Title</span><br />
                    <span class="d">Slide Description</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="assets/img/024.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="assets/img/024-s96x48.jpg" />
                    <span class="ti">Title</span><br />
                    <span class="d">Slide Description</span>
                </div>
            </div>
            <div>
                <img data-u="image" src="assets/img/025.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="assets/img/025-s96x48.jpg" />
                    <span class="ti">Title</span><br />
                    <span class="d">Slide Description</span>
                </div>
            </div>
          
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort121" style="position:absolute;left:0px;top:0px;width:268px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:268px;height:68px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
            <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                    <circle class="b" cx="8000" cy="8000" r="3000"></circle>
                </svg>
                <div data-u="numbertemplate" class="n"></div>
            </div>
        </div>
    </div>
        </div>
        <div class="clear"></div>
         <div class="features-blue" style="background-color: #ffffff;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Features</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i  style="color: yellow;"class="far fa-user-lock"></i>
                    <h3 class="name">Content Security</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-Learning</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/1.jpg">
                    <h3 class="name">Telisha Rai</h3>
                    <p class="title">Web Developer</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/2.jpg">
                    <h3 class="name">Binita Shrestha</h3>
                    <p class="title">Web Developer</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/3.jpg">
                    <h3 class="name">Muna Tamang</h3>
                    <p class="title">Web Developer</p>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col">
                    <footer style="background-color: #208f8f" id="myFooter">
                        <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <h1 class="logo" style="margin-top:30px;"><a href="#">&nbsp;<img  style="width: 100px; height: 100px"src="assets/img/logo2.png" alt="">&nbsp;</a></h1>
                                </div>
                                <div class="col-12 col-sm-6 col-md-2">
                                    <h5>Get started</h5>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Downloads<br></a></li>
                                        <li><a href="#">Sign Up</a></li>
                                        <li><a href="#">Other Links</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-6 col-md-2">
                                    <h5>Our Company</h5>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Company Information<br></a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <h5>Support</h5>
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Help Desk<br></a></li>
                                        <li><a href="#">Forums</a></li>
                                        <li><a href="#">External Links</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 social-networks">
                                    <div></div><a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="twitter"><i class="fa fa-twitter"></i></a><a href="#" class="google"><i class="fa fa-google-plus"></i></a><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    <button
                                        class="btn btn-primary" type="button" style="margin-top:20px;">Contact us</button>
                                </div>
                            </div>
                            <div class="row footer-copyright">
                                <div class="col">
                                    <p>© 2019 Copyright &nbsp;<a href="#">All Right Reserve</a></p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
   
    </div>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/App-Features-Carousel.js"></script>
 
<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>