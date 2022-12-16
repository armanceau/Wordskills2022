var test1, test2;
function test(){
    if (test1 && test2){
        document.getElementById('button1').disabled = false;
        
    }
}

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


function verifContenu() {
    var Contenu = document.getElementById('Contenu').value;
    if (!Contenu==""){
        Contenu = document.getElementById('Contenu').style.backgroundColor = 'lightgreen';
        var erreurContenu = document.getElementById('erreurContenu');
        erreurContenu.innerHTML = "";
        test1 = true;
    }
    else 
    {
        Contenu = document.getElementById('Contenu').style.backgroundColor = '#FFCCCB';
        var erreurContenu = document.getElementById('erreurContenu');
        erreurContenu.innerHTML = "<font color = red> Attention, le champs de ne peut pas être vide !</font>";
        test1 = false;
    }
    test();
}


function verifMail() {
    var Mail = document.getElementById('Mail').value;
    var regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    if (Mail.match(regex)){
        //Mettre la 1ere lettre en maj
        Mail = document.getElementById('Mail').style.backgroundColor = 'lightgreen';
        var erreurMail = document.getElementById('erreurMail');
        erreurMail.innerHTML = "";
        test2 = true;
    }
    else 
    {
        Mail = document.getElementById('Mail').style.backgroundColor = '#FFCCCB';
        var erreurMail = document.getElementById('erreurMail');
        erreurMail.innerHTML = "<font color = red> Attention, rentrez une adresse mail valide !</font>";
        test2 = false;
    }
    test();
}

