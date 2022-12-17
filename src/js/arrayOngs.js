/*ARRAY DE ONGS */
const Ongs = [
	{ id: 1, img: '../assets/images/ong1.png', title: 'Amigos dos Animais', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 2, img: '../assets/images/ong2.png', title: 'Amigos dos Animais', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 3, img: '../assets/images/ong3.png', title: 'Amigos dos Animais', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
	{ id: 4, img: '../assets/images/ong4.png', title: 'Amigos dos Animais', desc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos voluptas reiciendis velit eum dolorum necessitatibus repellat illum officia, alias cum corporis non ipsa facere, odit culpa a commodi quod!' },
]


Ongs.map((item, index) => {
	let ong = document.querySelector('.clone-footer .card-footer').cloneNode(true);

	document.querySelector('.grid-footer').append(ong);

	ong.querySelector('.card-f-img img').src = item.img;
});


