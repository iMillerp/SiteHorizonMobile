<?php

include('includes/mobile_device_detect.php');
mobile_device_detect(true, true, true, false, false, false, false, "http://radiohorizon.com.br/site/");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title></title>
        <link rel="stylesheet" href="css/jquery.mobile-1.3.1.css">
        <!-- Extra Codiqa features -->
        <link rel="stylesheet" href="css/codiqa.ext.css">
        <!-- jQuery and jQuery Mobile -->
        <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
        <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
        <!-- Extra Codiqa features -->
        <script src="js/codiqa.ext.js"></script>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-role="panel" id="mypanel">
                <ul data-role="listview" data-ajax="true" data-inset="true" data-theme="a">
                    <li data-role="list-divider">Menu Principal</li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Chat</a></li>
                    <li><a href="#">Locutores</a></li>
                    <li><a href="#">Publicidade</a></li>
                    <li><a href="#">Programação</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#my-header" data-rel="close" data-icon="close">Fechar</a></li>
                </ul>
                
            </div><!-- /panel -->
            <div data-theme="a" data-role="header">
                <a href="#mypanel" data-rel="open" data-icon="home" data-theme="a">Menu</a>
                <h3>&nbsp;</h3>
            </div>
            <div data-role="content">
                <img src="http://radiohorizon.com.br/site/img/logo.png" alt="image" style="width: 100%;">
                <div data-role="fieldcontain">
                    <input name="" id="searchinput1" placeholder="" value="" type="search">
                </div>
                <div data-role="navbar">
                    <ul>
                        <li>
                            <a href="http://inforwebhost2.virtuaserver.com.br:1935/pt8780aac217963/217aacplus8780.stream/playlist.m3u8" data-transition="fade" data-theme="a" data-icon="false">
                                IPHONE<br/>
                                <img src="http://maisouvida.com/~maisouve/iphone.png" width="48">
                            </a>
                        </li>
                        <li>
                            <a href="rtsp://inforwebhost2.virtuaserver.com.br:1935/pt8780aac217963/217aacplus8780.stream" data-transition="fade" data-theme="a" data-icon="false">
                                ANDROID<br/>
                                <img src="http://maisouvida.com/~maisouve/androide.png" width="48"> 
                            </a>
                        </li>
                        <li>
                            <a href="rtsp://inforwebhost2.virtuaserver.com.br:1935/pt8780aac217963/217aacplus8780.stream" data-transition="fade" data-theme="a" data-icon="false">
                                BLACKBERRY <br/>
                                <img src="http://maisouvida.com/~maisouve/blackberry.png" width="48">
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
            <div data-theme="a" data-role="footer">
                <h3>
                    Rádio Horizon &copy; - 2013 Dev <a href="http://millerdev.coom.br">iMillerp</a>
                </h3>
            </div>
        </div>
    </body>
</html>
