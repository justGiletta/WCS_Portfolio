/* PAULINE - partie Header nav - burger menu - responsive */

const burger = document.getElementById('burger');
const links = document.getElementById('links');
const quit = document.getElementById('quit');
const headerHidden = document.getElementById('bloc_title_header');

function burgerMenu(){
    burger.style.padding = '16px 16px 200vw 200vw';
    links.style.display = 'flex';
    quit.style.display = 'inline';
    headerHidden.style.visibility = 'hidden';
};
  
function quitFunction(){
    burger.style.padding = '16px 16px 32px 32px';
    links.style.display = 'none';
    quit.style.display = 'none';
    headerHidden.style.visibility = 'visible';
};

/* Fin partie Header nav - burger menu - responsive */