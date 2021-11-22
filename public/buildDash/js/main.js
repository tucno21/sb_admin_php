(function () {
	"use strict";
	//menu superior
	let barMenu = document.querySelector('.app-sidebar__toggle');
	barMenu.addEventListener('click', function (event) {
		event.preventDefault();
		let menuAccion = document.querySelector('.app');
		menuAccion.classList.toggle('sidenav-toggled');
	})

	//manu lateral
	let menuAccion = document.querySelectorAll('.treeview');

	menuAccion.forEach(function (item) {
		
		item.addEventListener('click', function (event) {

			// buscar todo los hermanos y eliminar classList
			let hermanos = this.parentElement.children;
			for (let i = 0; i < hermanos.length; i++) {
				hermanos[i].classList.remove('is-expanded');
			}

			// event.preventDefault();
			this.classList.toggle('is-expanded');
		});
	});

})();

$(document).ready(function() {
    $('#datatable').DataTable( {
        responsive: true,
		columnDefs:[
			{
			// target:1,
			className:'cell-border'
			}
		],
    } );
} );

// BOTON PARA EXPANDIR
let expandir = document.querySelector('.expandir');

expandir.addEventListener('click', function (){
	launchFullScreen(document.documentElement);
})

function launchFullScreen(element) {
	if(element.requestFullScreen) {
		element.requestFullScreen();
	} else if(element.mozRequestFullScreen) {
		element.mozRequestFullScreen();
	} else if(element.webkitRequestFullScreen) {
		element.webkitRequestFullScreen();
	}
}
