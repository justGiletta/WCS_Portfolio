<?php include 'layouts/_navbar.php'?>

<div class="bodyPresCard">
    <div class="presentationCard">
        <div class="linusPres">
            <h1 id="pres-title" class="linusPres-title">Linus Torvalds</h1>
            <div class="linusPres-text">
                <p id="pres-text-one" class="p-projet"> Informaticien américano-finlandais, je suis plutôt connu pour avoir créé en 1991 le noyau Linux dont je continue de diriger le développement. À ce titre, je bénéficie depuis 2009 du titre de &laquo;&nbsp;Dictateur bienveillant à vie&nbsp;&raquo; de Linux.<br> J'ai également crée le logiciel de gestion de versions décentralisée Git ainsi que le logiciel d'enregistrement et de planification des plongées Subsurface.<br></J>

                <p id="pres-text-two" class="p-projet">Mais, je suis avant tout un grand amateur de pingouins&nbsp;!</p>
            </div>
        </div>
        <div class="linusPres-img"><img id="pres-image" src="assets/images/linus2_wideweb__470x300,0.jpeg" width=800px heigth=600px alt="Young Linus Torvalds"/></img></div>
    </div>
</div>

<div class = "projects">

    <div class="projectsCard-title"><h1 id="projects-title">Projets</h1></div>

    <div class="bodyProjectsCard">

        <div class="projectCard">
        <a href="projet.php/#section1">
        <div class="projectCard-title">
            <div class="title"><h2 id="project-one-title">Linux</h2></div>
            <div class="picto"><img src="/assets/images/PictoPinguNB.png" width=50px heigth=50px alt="Git Logo"/></img></div>
            </div>
            <div class="project-img" id ="img1">
            <img id="project-one-image" src="assets/images/linuxPictoColor.png" width=800px heigth=600px alt="Linux Logo"/></img></div>
        </a>
        </div>

        <div class="projectCard">
        <a href="projet.php/#section2">
        <div class="projectCard-title">
            <div class="title"><h2 id="project-two-title">Git</h2></div>
            <div class="picto"><img src="/assets/images/PictoPinguNB.png" width=50px heigth=50px alt="Git Logo"/></img></div>
            </div>
            <div class="project-img" id ="img2">
            <img id="project-two-image" src="assets/images/1280px-Git-logo.svg.png" width=800px heigth=600px alt="Git Logo"/></img></div>
        </a>
        </div>
        
        <div class="projectCard">
        <a href="projet.php/#section3">
        <div class="projectCard-title">
            <div class="title"><h2 id="project-three-title">Subsurface</h2></div>
            <div class="picto"><img src="/assets/images/PictoPinguNB.png" width=50px heigth=50px alt="Git Logo"/></img></div>
            </div>
            <div class="project-img" id ="img3">
            <img id="project-three-image" src="assets/images/logoSubsurface.png" alt="Subsurface Logo"/></img>
            </div>
        </a>
        </div>

    </div>
</div>
<?php include 'layouts/_footer.php'?>
<script src="functions/pinguIndex.js"></script>