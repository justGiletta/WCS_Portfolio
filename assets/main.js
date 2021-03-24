/* PAULINE - partie Header nav - burger menu - responsive */



function changeHeader() {
    titleHeader = document.getElementById('title_header');
    homeHeader = document.getElementById('home');
    projetHeader = document.getElementById('projet');
    contactHeader = document.getElementById('contact');
    if("matchMedia" in window) {
        if(window.matchMedia("(max-width: 700px)").matches) {
            titleHeader.innerHTML = "L.T";
            homeHeader.innerHTML = "home";
            homeHeader.className = "material-icons";
            projetHeader.innerHTML = "workspaces";
            projetHeader.className = "material-icons";
            contactHeader.innerHTML = "mail";
            contact.className = "material-icons";
        } 
    }
};

window.addEventListener('resize', changeHeader);

/* Fin partie Header nav - burger menu - responsive */