<html>
    <head>
        <meta charset="utf-8">
        <title>Forside</title>
        <!-- Her finder browseren ud af hvor mange pixel bred brugerens skærm er -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Her laves der et link til css-filen - som i dette tilfælde hedder "adaptive.css" -->
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    
    <body>
        <div class="container">
            <nav>
                <ul>
                    <li class="Navlist"><a href="index.php"><p2>Fag</p2></a></li>
                    <li class="Navlist"><a href="Refleksion.php"><p2>Refleksion</p2></a></li>
                    <li class="Navlist"><a href="Kilder.php"><p2>Kilder</p2></a></li> 
                </ul>
            </nav>
            
            <div class="content">
                    <a href="Design.php"><img class="Img_Design" src="Pictures/Design.jpg"  alt="Design"></a>
            </div>
            
            <div class="content">
                    <a href="Kommunikation.php"><img class="Img_Tale" src="Pictures/Tale.jpg"  alt="Kommunikation"></a>
            </div>
            
            <div class="content">
                    <a href="Webudvikling.php"><img class="Img_Web" src="Pictures/Web.jpg"  alt="Kodning"></a>
            </div>
            
            <div class="content">
                    <a href="Projekt.php"><img class="Img_Projekt" src="Pictures/Projekt.jpg"  alt="Projekt"></a>
            </div>
    
        <footer>
            <?php  
                include "Footer.html"; 
            ?> 
        </footer>
            
        </div>
    </body>
</html>