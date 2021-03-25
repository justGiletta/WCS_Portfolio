<?php include 'layouts/_navbar.php'?>
<div class="content">
<div class="bodyPresCard">
    <div class="presentationCard">
        <div class="linusPres">
            <h1 id="pres-title" class="linusPres-title">Linus Torvalds</h1>
            <div class="linusPres-text">
                <p id="pres-text-one" class="p-projet"> I am a Finnish-American software engineer best known for the creation of the Linux kernel in 1991, of which I still lead the development to this day. As such, since 2009 I enjoy the title of &laquo;&nbsp;Benevolent Dictator for Life&nbsp;&raquo; of Linux.<br>  I also created the decentralized version management software Git as well as the Subsurface dive recording and planning software.<br></J>

                <p id="pres-text-two" class="p-projet">Above all, I am a big fan of penguins!</p>
            </div>
        </div>
        <div class="linusPres-img"><img id="pres-image" src="assets/images/linus2_wideweb__470x300,0.jpeg" width=800px heigth=600px alt="Young Linus Torvalds"/></img></div>
    </div>
</div>

<div class = "projects">

    <div class="projectsCard-title"><h1 id="projects-title">Projects</h1></div>

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
</div>
<?php include 'layouts/_footer.php'?>
<script src="functions/pinguIndex.js"></script>