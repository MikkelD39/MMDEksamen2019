<html>
    <head>
        <meta charset="utf-8">
        <title>Kommunikation</title>
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
            
            <div class="titles">
                    <img class="Img_TaleTitle" src="Pictures/TaleTitle.jpg"  alt="Banner">
            </div>
            
            <button class="collapsible"><h2>Præsentationsteknik</h2></button>
            <div class="content2">
                <p>Præsentationsteknik handler om hvordan vi bedst muligt kan få vores budskab ud til modtagerne. Her ser vi på hvordan modtagerne opfatter den måde vi præsenterer på og arbejder på at få dem til at modtage vores egentlige budskab bedre.</p>
                <p>Vores egentlige fokus er at give en så god præsentation så muligt sådan at modtagerne opfatter os positivt, og på den måde fremme forståelsen af vores budskab til vores modtagere.</p>
                <img class="Img_TaleTeknik" src="Pictures/Taleteknik.jpg"  alt="Model">
                <p>Det er vigtigt at overveje situationen angående ens præsentation. F.eks. hvad vil du gerne have at modtagerne skal tænke og føle. Jo mere kontrol du kan have over deres tankegang, jo bedre kan selve budskabet blive formidlet overfor dem. Der er mange forskellige måder man kan få den kontrol. F.eks. ved at bevæge sig rundt sådan at modtagerne må dreje hovedet for at følge med, gør at de holder sig mere fokuseret og holder dem vågne mens det viser sikkerhed for afsenderen.</p>
            </div>
            
            <button class="collapsible"><h2>Brugertest</h2></button>
            <div class="content2">
                <p>En brugertest kan blive brugt for at undersøge hvilke problematikker der kan være i forhold til noget. Det går ud på at man får fat i personer som man kan lave en test overfor. Der er mange forskellige former for brugerteste som kan blive benyttet af, men de vil typisk blive benyttet for at finde et problem eller en fejl som var blevet overset eller ikke tænkt over.</p>
                <img class="Img_TaleTest" src="Pictures/Taletest.jpg"  alt="Billede">
                <p>Et eksempel på en brugertest ville være ”tænke højt testen”. Testen går ud på at få en person ind af gangen og lave en test. Testen kunne fungere på en hjemmeside eller en app, men pointen er at personen der tager brugertesten, snakker højt over hvad man ser og hvordan man opfatter ting. Mens testlederen giver testtageren nogle opgaver som testtageren skal udføre på siden. Det kunne være at finde et bestemt punkt på siden. Denne test hjælper meget i forhold til brugervenlighed overfor design og funktioner på eventuel hjemmeside eller app.</p>
            </div>
            
            <button class="collapsible"><h2>Business Model Canvas</h2></button>
            <div class="content2">
                <p>Med Business Model Canvas har du mulighed for at arbejde med udviklingen i henhold med en forretningsmodel for eventuel en virksomhed. Business Model Canvas blev introduceret i 2010 af Alexander Osterwalder.</p>
                <img class="Img_TaleBMC" src="Pictures/TaleBMC.jpg"  alt="Billede">
                <p>Når man arbejder med Business Model Canvas er det vigtigt at huske at alle felter er afhængige af hinanden og har indflydelse over for hinanden. Det er vigtigt i forhold til Business Model Canvas at alle de valg der er gennem modellen har indflydelse på de resterende elementer i Modellen. Business Model Canvas hjælper med at skabe overblik over dine styrker og svagheder og hvad du har i forhold til hele virksomheden eller et projekt.</p>
            </div>
            
            <button class="collapsible"><h2>Refleksion</h2></button>
            <div class="content2">
                <p>I forhold til kommunikation, så føler jeg muligvis er bagud. Jeg har været fraværende pga. sygdom ved lidt for mange af kommunikationstimerne, og har generelt et dårlig overblik over hvilken egentlig viden jeg nok mangler eller kan gøre bedre. Jeg har gået på f.eks. hhx, og af den grund har jeg lært meget af det som vi lærer i kommunikation, vil jeg da tro. Det har i det mindste hjulpet mig med hvordan kommunikation skal fungere fra et professionelt ”business” del, og også hvordan jeg arbejder med modeller, så jeg er sikker på at jeg kan lære nye modeller hurtigt.</p>  
            </div>
            
            <footer>
                <?php  
                    include "Footer.html"; 
                ?>  
            </footer>
    
        </div>
        
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                  content.style.display = "none";
                } else {
                  content.style.display = "block";
                }
              });
            }
        </script>
        
    </body>
</html>