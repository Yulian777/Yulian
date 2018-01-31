<!DOCTYPE html>

<html>
    <head>
        <title>Skilogram</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main2.css" type="text/css">
        <link rel="stylesheet" href="css/style1.css" type="text/css">
    </head>
    <body>
        <header>           
            <div class="main-head">
                <div class="logo">
                    <a href=""><image src="image/logo.png" alt="image" id="logo"/></a>
                </div>
                <div class="head">
                <div id="search-img">
                    <image src="image/search.png" alt="image"/>
                </div>  
                    <form action="?controller=User&action=ent" method="post" class="form">
                        <input type="text" name="text" id="search">
                        <input type="submit" name="enter" value="Вход" id="input1">
                    </form>    
                    <form action="?controller=User&action=reg" method="post" class="form">
                        <input type="submit" name="auth" value="Регистрация" id="registry">
                    </form>
                </div>
            </div> 
            <div class="dws">
                <a href="#" class="rait"> По рейтину</a>
                <a href="#" class="random">Случайно</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#" class="but">#Neon</a></li>
                    <li><a href="#" class="but">#Textures</a></li>
                    <li><a href="#" class="but">#Aeril</a></li>
                    <li><a href="#" class="but">#Objects</a></li>
                    <li><a href="#" class="but">#Grid</a></li>
                    <li><a href="#" class="but">#Urban</a></li>
                    <li><a href="#" class="but">#Typo</a></li>
                    <li><a href="#" class="but">#Music</a></li>
                    <li><a href="#" class="but">#Colors</a></li>
                    <li><a href="#" class="but">#Food</a></li>
                    <li><a href="#" class="but">#Curved</a></li>                    
                </ul> 
            </div>
        </header>

