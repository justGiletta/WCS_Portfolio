/* PAULINE - partie Header nav - burger menu - responsive */

function changeHeader() {
    titleHeader = document.getElementById('title_header');
    homeHeader = document.getElementById('home');
    projetHeader = document.getElementById('projet');
    contactHeader = document.getElementById('contact');
    if("matchMedia" in window) {
        if(window.matchMedia("(max-width: 700px)").matches) {
            titleHeader.innerHTML = "L . T";
            homeHeader.innerHTML = "home";
            homeHeader.className = "material-icons";
            projetHeader.innerHTML = "workspaces";
            projetHeader.className = "material-icons";
            contactHeader.innerHTML = "mail";
            contact.className = "material-icons";
        } else {
            titleHeader.innerHTML = "Linus Torvald";
            homeHeader.innerHTML = "Accueil";
            homeHeader.className = "";
            projetHeader.innerHTML = "Projets";
            projetHeader.className = "";
            contactHeader.innerHTML = "Contact";
            contact.className = "";
        }
    }
};

window.addEventListener('resize', changeHeader);

/* PAULINE Fin partie Header nav - burger menu - responsive */

/* Partie Wissam */

<script>
    $(document).ready(function() {
        $('img.images').click(function() {
            window.location.href = firstboximage1 + 'https://git-scm.com/';
        })};
    }); 
</script>

/* Fin Partie Wissam */