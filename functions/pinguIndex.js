let pinguMode = localStorage.getItem('pinguMode')
console.log(typeof(pinguMode))
if (pinguMode == 'true') {
    console.log('in there')
    document.getElementById('pres-title').innerHTML = "Pingu Noot"
    document.getElementById('pres-text-one').innerHTML = "Pingu est un pingouin malin qui vit en Antarctique avec sa famille et ses amis. Il a été créée par Otmar Gutmann en 1990."
    document.getElementById('pres-text-two').innerHTML = "Suivez ses aventures avec mes amis Robby le phoque, Pingo, Pink, Pingi, ma famille et mes pires ennemis, la mouette et Bajoo, l’abominable homme des neiges."
    document.getElementById('pres-image').setAttribute("src", "assets/images/theBestBoy.png")
    document.getElementById('pres-image').setAttribute("alt", "The Best Boy you'll ever see")
    
    document.getElementById('projects-title').innerHTML = "Mes aventures"

    document.getElementById('project-one-title').innerHTML = "Bonjour Pingu !"
    document.getElementById('project-two-title').innerHTML = "Grand-Père est malade"
    document.getElementById('project-three-title').innerHTML = "Pingu le Chef"

    document.getElementById('project-one-image').setAttribute("src", "assets/images/pinguFamilly.png")
    document.getElementById('project-two-image').setAttribute("src", "assets/images/grandpaPingu.png")
    document.getElementById('project-three-image').setAttribute("src", "assets/images/eatingPingu.png")
}