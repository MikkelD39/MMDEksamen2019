<html>
    <head>
        <meta charset="utf-8">
        <title>Design</title>
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
                    <img class="Img_DesignTitle" src="Pictures/DesignTitle.jpg"  alt="Design">
            </div>
            
            <button class="collapsible"><h2>Illustrator</h2></button>
            <div class="content2">
                <p>Illustrator er et meget stærkt vektorgrafiksoftware af Adobe, som kan bruges til at skabe professionelle logoer, ikoner, typografi, tegninger og illustrationer til en hvilken som helst skærm. Det er vektorgrafik, hvilket betyder at det der bliver lavet kan skaleres frit op og ned og ikke miste kvalitet.</p>
                <img class="Img_DesignIllustrator" src="Pictures/DesignIllustrator.jpg"  alt="HTML">
                <p>Illustrator bliver benyttet af millioner af grafikere og designere, og bliver brugt til at lave en meget bred mængde af design. Design er alt fra ikoner til skilte og hvad ellers man kan finde på der vil give mening.</p>
            </div>
            
            <button class="collapsible"><h2>Photoshop</h2></button>
            <div class="content2">
                <p>Photoshop er et billedbehandlingsprogram af Adobe. Billedbehandlingsprogrammet bliver mest benyttet af professionelle kunstnere og fotografere til billedbehandling, for at skabe smukke og professionelle billeder. Photoshop bliver benyttet i sammenhæng til at lave ikoner, hjemmesider, plakater og en masse andet. Med et program som Photoshop er det kun ens kreativitet som sætter grænser for hvad man kan benytte det til.</p>
                <img class="Img_DesignPhotoshop" src="Pictures/DesignPhotoshop.jpg"  alt="HTML">
                <p>Med Photoshop har du en masse værktøj som du kan gøre brug af. Af de værktøjer er der også en masse forskellige blyanter og pensler, som Photoshop har haft et fokus på at få til at føles ægte. En tegnplade kan blive benyttet for at få værktøjet Photoshop tilbyder til at føles mere ægte.</p>
            </div>
            
            <button class="collapsible"><h2>Typografi</h2></button>
            <div class="content2">
                <p>Skal du benytte dig af tekst er det vigtigt at overveje om hvordan typografien skal se ud. Når typografi skal vælges, er det også vigtigt at tænke på hvem ens målgruppe er sådan man bedst muligt kan rette typografien til den målgruppe. Typografi er meget vigtigt at overveje på f.eks. en hjemmeside og er også vigtig for en avis at sikre sig at deres typografi er i orden.</p>
                <img class="Img_DesignTypografi" src="Pictures/DesignTypografi.jpg"  alt="HTML">
                <p>Der er mange forskellige ting som kan gøres ved typografien. Der kan overvejes hvor stor teksten skal være, hvilken font der skal bruges, om teksten skal være ”bold” eller ”cursive” om du vil have en underlinje, hvilken farve osv. Det er vigtigt med typografi at det er nemt og behageligt for læseren at læse teksten. Hvis teksten er i en skrigende farve eller tekstens farve blender sig ind med baggrunden med manglende kontrast kan teksten hurtigt blive ubehageligt.</p>
            </div>
            
            <button class="collapsible"><h2>Farver</h2></button>
            <div class="content2">
                <p>Det er vigtigt at have farvevalg med i sine overvejelser, om det så er i forhold til en hjemmeside, en plakat, et logo eller til farven i sin forretning. Farver kan have en påvirkning på vores tankegang og kan hjælpe med at gøre kunder gladere, gøre det nemmere at finde rundt og generelt få noget til at se mere professionelt ud. Det er svært helt præcist at sige hvilken effekt en farve vil have overfor en person, mange markedsføringsfolk vil have de farver som de vil bruge for at opnå en effekt, men det er ikke rigtig i forhold til nogen forskning men generelt hvordan farven har en værdi eller effekt for de fleste folk.</p>
                <img class="Img_DesignFarve" src="Pictures/DesignFarve.jpg"  alt="HTML">
                <p>Ved nogle af de forskninger er det også usikker hvor præcise de har været, da man mener at forskerne har haft en påstand om hvilken effekt en givet farve har og så blot har forsøgt at bevise at farven har den effekt. Farver kan blive opfattet på forskellige måder fra person til person, som man mener har med de enkelte personers opfattelse med den farve gennem livet at gøre.</p>
                
            </div>
            
            <button class="collapsible"><h2>Refleksion</h2></button>
            <div class="content2">
                <p>Indenfor design er der punkter hvor jeg føler at jeg kan gøre bedre. I forhold til Photoshop og Illustrator så ved jeg hvad jeg skal bruge dem til, men mangler mere erfaring med at bruge dem. Langt det meste af hvad jeg har lært i Photoshop, kan jeg allerede gøre i Gimp og meget hurtigere, men jeg skal have sat større fokus på at bruge Photoshop i stedet så jeg kan blive bedre til at benytte mig af programmet.</p>
                <p>Jeg var der ikke den dag vi lærte om kameraerne og har ingen rigtig erfaring med at bruge rigtige kameraer. Af den grund har jeg begrænset viden i forhold til kameraerne og har brug for at gøre det bedre indenfor det område.</p>
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