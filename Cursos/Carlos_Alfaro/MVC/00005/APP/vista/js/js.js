var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
	if (mySidebar.style.display === 'block') {
		mySidebar.style.display = 'none';
		overlayBg.style.display = "none";
	} else {
		mySidebar.style.display = 'block';
		overlayBg.style.display = "block";
	}
}

// Close the sidebar with the close button
function w3_close() {
	mySidebar.style.display = "none";
	overlayBg.style.display = "none";
}

// //////////////////////////////////////////

function imagenes_temp(argument) {
	let imagen = document.querySelectorAll("img");

	for (var i = 0; i < imagen.length; i++) {
		let dataimg = Math.floor((Math.random() * 100) + 1);

		if (dataimg >= 10 && dataimg <= 99) {
			dataimg = "0" + dataimg;
		} else if (dataimg < 10) {
			dataimg = "00" + dataimg;
		}

		let url = "vista/img/" + dataimg + ".png";
		imagen[i].src = url;
	}
}
imagenes_temp();