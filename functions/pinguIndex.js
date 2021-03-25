if (localStorage.getItem("pinguMode") == "true") {
	//background
	document.querySelector("body").style.backgroundImage =
		"url('https://64.media.tumblr.com/451d8cae2fa00d4e2ab3f2b6dbd059aa/tumblr_p45l07llgw1x4kppqo1_400.gif')";

	//Presentation
	document.getElementById("pres-title").innerHTML = "Pingu Noot";
	document.getElementById("pres-text-one").innerHTML =
		"Pingu est un pingouin malin qui vit en Antarctique avec sa famille et ses amis. Il a été créée par Otmar Gutmann en 1990.";
	document.getElementById("pres-text-two").innerHTML =
		"Suivez ses aventures avec mes amis Robby le phoque, Pingo, Pink, Pingi, ma famille et mes pires ennemis, la mouette et Bajoo, l’abominable homme des neiges.";
	document
		.getElementById("pres-image")
		.setAttribute("src", "assets/images/theBestBoy.png");
	document
		.getElementById("pres-image")
		.setAttribute("alt", "The Best Boy you'll ever see");

	//Projets
	document.getElementById("projects-title").innerHTML = "Mes aventures";

	document.getElementById("project-one-title").innerHTML = "Bonjour Pingu !";
	document.getElementById("project-two-title").innerHTML =
		"Grand-Père est malade";
	document.getElementById("project-three-title").innerHTML = "Pingu le Chef";

	document
		.getElementById("project-one-image")
		.setAttribute("src", "assets/images/pinguFamilly.png");
	const pinguProjectImg1 = document.getElementById("project-one-image");
	pinguProjectImg1.style.height = "68%";

	document
		.getElementById("project-two-image")
		.setAttribute("src", "assets/images/grandpaPingu.png");
	const pinguProjectImg2 = document.getElementById("img2");
	pinguProjectImg2.style.marginTop = "10px";
	pinguProjectImg2.style.height = "70%";

	document
		.getElementById("project-three-image")
		.setAttribute("src", "assets/images/eatingPingu.png");
}
