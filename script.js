let bopen = document.querySelector('#open');
let bclose = document.querySelector('#close');

function afficher(){
    document.querySelector('#popup').style.display="flex";
}

function masquer(){
    document.querySelector('#popup').style.display="none";
}

bopen.addEventListener('click', afficher);
bclose.addEventListener('click', masquer);

document.addEventListener('keyup', (e)=>{if(e.key=='Escape') masquer()});