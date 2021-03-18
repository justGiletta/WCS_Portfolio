/* PAULINE - partie Header nav - burger menu - responsive */

const burger = document.getElementById('burger');
const links = document.getElementById('links');
const quit = document.getElementById('quit');
const header = document.getElementById('bloc_title_header');

function burgerMenu(){
    burger.style.padding = '16px 16px 200vw 200vw';
    links.style.display = 'flex';
    quit.style.display = 'inline';
    header.style.visibility = 'hidden';
};
  
function quitFunction(){
    burger.style.padding = '16px 16px 32px 32px';
    links.style.display = 'none';
    quit.style.display = 'none';
    header.style.visibility = 'visible';
};