var modalredline = document.getElementById('modalredline');
var redline = document.getElementById("redline");
var modalasiimov = document.getElementById('modalasiimov');
var asiimov = document.getElementById("asiimov");
var modalfrontside = document.getElementById('modalfrontside');
var frontside = document.getElementById("frontside");
var modalhyperbeast = document.getElementById('modalhyperbeast');
var hyperbeast = document.getElementById("hyperbeast");
var modalonitaiji = document.getElementById('modalonitaiji');
var onitaiji = document.getElementById("onitaiji");
var modal57hyperbeast = document.getElementById('modal57hyperbeast');
var fivehyperbeast = document.getElementById("57hyperbeast");
var modaltigertooth = document.getElementById('modaltigertooth');
var tigertooth = document.getElementById("tigertooth");
var modalmarblefade = document.getElementById('modalmarblefade');
var marblefade = document.getElementById("marblefade");
var modallore = document.getElementById('modallore');
var lore = document.getElementById("lore");
var modaldragonlore = document.getElementById('modaldragonlore');
var dragonlore = document.getElementById("dragonlore");
redline.onclick = function() {
    modalredline.style.display = "block";
}
asiimov.onclick = function() {
    modalasiimov.style.display = "block";
}
frontside.onclick = function() {
    modalfrontside.style.display = "block";
}
hyperbeast.onclick = function() {
    modalhyperbeast.style.display = "block";
}
onitaiji.onclick = function() {
    modalonitaiji.style.display = "block";
}
fivehyperbeast.onclick = function() {
    modal57hyperbeast.style.display = "block";
}
tigertooth.onclick = function() {
    modaltigertooth.style.display = "block";
}
marblefade.onclick = function() {
    modalmarblefade.style.display = "block";
}
lore.onclick = function() {
    modallore.style.display = "block";
}
dragonlore.onclick = function() {
    modaldragonlore.style.display = "block";
}
// When the user clicks on <span> (x), close the modal

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalredline) {
        modalredline.style.display = "none";
    }
	if (event.target == modalasiimov) {
        modalasiimov.style.display = "none";
    }
	if (event.target == modalfrontside) {
        modalfrontside.style.display = "none";
    }
	if (event.target == modalhyperbeast) {
        modalhyperbeast.style.display = "none";
    }
	if (event.target == modalonitaiji) {
        modalonitaiji.style.display = "none";
    }
	if (event.target == modal57hyperbeast) {
        modal57hyperbeast.style.display = "none";
    }
	if (event.target == modaltigertooth) {
        modaltigertooth.style.display = "none";
    }
	if (event.target == modalmarblefade) {
        modalmarblefade.style.display = "none";
    }
	if (event.target == modallore) {
        modallore.style.display = "none";
    }
	if (event.target == modaldragonlore) {
        modaldragonlore.style.display = "none";
    }
}