let hamburger = document.getElementById('hamburger');
let nav = document.getElementById('nav');
hamburger.addEventListener('click',()=>{

	nav.classList.toggle("nav_active");




	// if(nav.style.display === 'block'){
	// 	nav.style.cssText = 'display: none!important';
	// }
	// else{
	// 	nav.style.cssText = 'display: block!important';
	// }
});