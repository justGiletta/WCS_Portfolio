if (localStorage.getItem("pinguMode") == "true") {
	//background
	document.querySelector("body").style.backgroundImage =
		"url('https://64.media.tumblr.com/451d8cae2fa00d4e2ab3f2b6dbd059aa/tumblr_p45l07llgw1x4kppqo1_400.gif')";

	//Presentation
	document.getElementById("pres-title").innerHTML = "Pingu Noot";
	document.getElementById("pres-text-one").innerHTML =
		"Pingu is a clever penguin who lives in Antarctica with his family and friends. It was created by Otmar Gutmann in 1990. Which makes it plausible that he was able to create the Linux kernel in 1991 ...";
	document.getElementById("pres-text-two").innerHTML =
	"Follow his adventures with his friends Robby the Seal, Pingo, Pink, Pingi, his family and his worst enemies, the Seagull and Bajoo, the abominable Snowman.";
	document
		.getElementById("pres-image")
		.setAttribute("src", "assets/images/theBestBoy.png");
	document
		.getElementById("pres-image")
		.setAttribute("alt", "The Best Boy you'll ever see");

	//Projets
	document.getElementById("projects-title").innerHTML = "Pingu's Adventures";

	document.getElementById("project-one-title").innerHTML = "Hello Pingu !";
	document.getElementById("project-two-title").innerHTML =
		"Grandfather is sick";
	document.getElementById("project-three-title").innerHTML = "Pingu the Cook";

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
