<?php

include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';

include './Components/modal.php';
?>


<!--HOME AREA-->
<div class="home-area ">
	<div class="banner-area">
		<div class="banner-info">
			<div class="h3">O programa ajude um Pet <br />
				já ajudou mais de 1252 animais a encontrarem um lar.
			</div class='info-button'>
			<a href="#" class="btn btn-primary btn-size">
				Saiba mais
			</a>
		</div>
	</div>
</div>



<!--HOME INFO-->
<div class="home-info mt-5">
	<div class="h3 text-center">Conheça o programa</div>
	<div class="home-info-desc">
		Nós fazemos a conexão entre quem deseja adotar um pet com uma rede de mais de 123 ONGs e protetores parceiros. Funciona assim:
		a Petz disponibiliza espaços especialmente dedicados para a adoção no centro de suas lojas
		e as ONGs/protetores parceiros ficam responsáveis pelo processo e entrevista com os potenciais adotantes. Juntos somos mais fortes!
	</div>
</div>


<!--HOME AREA-->
<div class="home-area ">
	<div class="banner-two">
		<div class="banner-two-info">
			<div class="h5">APOIE E FAÇA PARTE DA MAIOR REDE DE ADOÇÃO E BEM ESTAR DE CÃES E GATOS DO BRASIL.</div>
			<div class="h3">Toda ajuda conta e faz muita diferença.</div>
			<div class="banner-ong-area mt-2">
				<div class="ong">
					<div class="ong-img">
						<img src="../../assets/images/ong1.png" alt="" />
					</div>
					<div class="h4 mt-2">Salve os Animais</div>
					<div class="desc-ong -mt-2 text-center">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.
						Repudiandae sit neque sed modi ipsa cum voluptatibus veniam nisi natus?
						Rerum eos recusandae animi obcaecati quod fugiat exercitationem quibusdam totam facilis.
					</div>
				</div>
				<div class="ong">
					<div class="ong-img">
						<img src="../../assets/images/ong2.png" alt="" />
					</div>
					<div class="h4 mt-2">Proteção dos Animais</div>
					<div class="desc-ong -mt-2 text-center">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.
						Repudiandae sit neque sed modi ipsa cum voluptatibus veniam nisi natus?
						Rerum eos recusandae animi obcaecati quod fugiat exercitationem quibusdam totam facilis.
					</div>
				</div>
				<div class="ong">
					<div class="ong-img">
						<img src="../../assets/images/ong3.png" alt="" />
					</div>
					<div class="h4 mt-2">Ajude um Animal.</div>
					<div class="desc-ong -mt-2 text-center">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.
						Repudiandae sit neque sed modi ipsa cum voluptatibus veniam nisi natus?
						Rerum eos recusandae animi obcaecati quod fugiat exercitationem quibusdam totam facilis.
					</div>
				</div>
				<div class="ong">
					<div class="ong-img">
						<img src="../../assets/images/ong4.png" alt="" />
					</div>
					<div class="h4 mt-2">Adote um Animal.</div>
					<div class="desc-ong -mt-2 text-center">
						Lorem ipsum dolor, sit amet consectetur adipisicing elit.
						Repudiandae sit neque sed modi ipsa cum voluptatibus veniam nisi natus?
						Rerum eos recusandae animi obcaecati quod fugiat exercitationem quibusdam totam facilis.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--HOME VIDEO-->

<div class="home-video">
	<div class="video-info">
		<div class="h3">Além de adotar, você também pode ajudar de outras maneiras:</div>
		<div class="mt-2">
			Comprar os produtos da Editora Mol (livros, calendários e álbum de figurinhas - todo o lucro é revertido para as ONGs parceiras)
			Arredondar o valor de suas compras nas lojas Petz (oferecendo a diferença como doação para as ONGs parceiras)
			Doar itens nas lojas Petz (como alimentos e acessórios)
			Apadrinhar um pet
			Oferecer um lar temporário
			Ser voluntário nos eventos ou nos próprios abrigos das ONGs parceiras
		</div>

		<a href="#" class="btn btn-primary btn-size"> Saiba mais</a>
	</div>
	<div class="video-home">
		<video src="../../assets/video/adote.mp4" controls="controls">

		</video>
	</div>
</div>




<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

if (isset($_GET['message'])){
    include 'Views/Feedback/feedbackDoacao.php';
}
?>