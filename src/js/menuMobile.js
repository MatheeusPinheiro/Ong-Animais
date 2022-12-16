

let AbrirmenuMobile = ()=>{
	let menu = document.querySelector('.menu-mobile-rigth');
	menu.classList.toggle('abriMenu');

	menuHamburguer.classList.toggle('menu-margin');
}


let menuHamburguer = document.querySelector('.menu-mobile');

menuHamburguer.addEventListener('click', ()=>{
	AbrirmenuMobile();
	
});




/*Modal de doações */

let doar = document.querySelector('.doador');

let modal = document.querySelector('.modal-cad-doacao');


doar.addEventListener('click', (e)=>{
	e.preventDefault();
	modal.style.display = 'flex';
});



//fechando o model sem clicar no botão fechar 

modal.addEventListener('click', (e)=>{
	if(e.target.classList.contains('modal-cad-doacao')){
		modal.style.display = 'none';
	}
})

// fechando o modal */


let botaofechar = document.querySelector('.close-x span');

botaofechar.addEventListener('click', ()=>{
	modal.style.display = 'none';
});