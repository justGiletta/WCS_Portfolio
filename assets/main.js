/* PAULINE - partie Header nav - burger menu */

const burger = document.getElementById('burger');
const links = document.getElementById('links');
const quit = document.getElementById('quit');

function burgerMenu(){
    burger.style.padding = '16px 16px 200vw 200vw';
    links.style.display = 'flex';
    quit.style.display = 'inline';
};
  
function quitFunction(){
    burger.style.padding = '16px 16px 32px 32px';
    links.style.display = 'none';
    quit.style.display = 'none';
};