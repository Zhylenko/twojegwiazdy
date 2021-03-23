window.addEventListener("load", function () {
    
    //Block copying
	document.ondragstart = noselect;
	document.onselectstart = noselect;
	document.oncontextmenu = noselect;
	function noselect() {return false;}

    //Preload page
	preloader();

    //Page change
    let links = document.querySelectorAll("a:not([href^='#']):not([href^='tel']):not([href^='mailto'])");
    for(var i = 0; i < links.length; i++) {
	    links[i].onclick = function (event) {
	        event.preventDefault();
	        preloader();
	        href = this.href;
			setTimeout(function(){
				redirectPage(href);
				//preloader();
			}, 500);
	    }
	}

    //Anchors
	let anchorLinks = document.querySelectorAll("a[href^='#']");
    for(var i = 0; i < anchorLinks.length; i++) {
	    anchorLinks[i].onclick = function (event) {
			event.preventDefault();
			el = document.getElementById(this.getAttribute("href").substr(1));

			if(el != null){
				el.scrollIntoView({
					behavior: "smooth",
					block: "start"
				});	
			}
	    }
	}

	//Top button
	let topButton = document.getElementsByClassName("top-button")[0];
	window.addEventListener("scroll", function(){
		if(window.pageYOffset > 150){
			topButton.classList.add("shown");
		}else{
			topButton.classList.remove("shown");
		}
	}); 

	//Auto resize textarea
	let textareas = document.querySelectorAll(".input textarea");
	for (var i = 0; i < textareas.length; i++) {
		textareas[i].addEventListener("input", function(e){
			this.style.height = "auto";
			this.style.height = this.scrollHeight + "px";			
		});
	}

    //Burger
	let burgers = document.querySelectorAll(".burger");
	let menu = document.getElementsByClassName("navbar-block")[0];
	for (var i = 0; i < burgers.length; i++) {
		burgers[i].addEventListener("click", function(e){
			this.classList.toggle("close");
			menu.classList.toggle("opened");	
		});
	}
	//Closing menu after selecting item
	let navbarElements = menu.querySelectorAll("a");
	for (var i = 0; i < navbarElements.length; i++) {
		navbarElements[i].addEventListener("click", function(e){
			for (var i = 0; i < burgers.length; i++) {
				burgers[i].classList.toggle("close");
			}
			menu.classList.toggle("opened");	
		});
	}

    //Functions
    function preloader(){
    	let preloader = document.getElementsByClassName("preloader")[0];
    	preloader.classList.toggle("shown");
    }

    function redirectPage(linkLocation) {
		window.location = linkLocation;
	}
});