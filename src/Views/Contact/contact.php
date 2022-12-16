<?php


include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
include './Components/modal.php';
?>





<div class="container-contact">
	<div class="h1 text-white text-center pt2 pb-2">Entre em contato</div>
	<div class="contact-area">
		<div class="contactLeft">
			<div class="h5 text-white">Não seja timido</div>
			<p>
				Fique a vontade para entrar em contato comigo.
				Estou sempre aberto para discutir novos projetos. Ideias Criativas
				ou oportunidade para doeções para ongs.
			</p>

			<div class="msg-icon">
				<img src="../../assets/images/msg.png"/>
				<span>E-mail: pethelp@gmail.com</span>
			</div>
			<div class="msg-icon">
				<img src="../../assets/images/phone.png"/>
				<span>Contato: 4002-8922 </span>
			</div>
		</div>

		<div class="contactRight">
			<div class="form-contact">
				<div class="input-box">
					<input type="text" placeholder="Digite seu nome"/>
				</div>
				<div class="input-box">
					<input type="text" placeholder="Digite seu E-mail."/>
				</div>
				<div class="area-text">
					<textarea placeholder="Digite sua mensagem aqui."></textarea>
				</div>
				<div class="chekbox-menssage">
					<input type="checkbox"> <span>Eu aceito os termos de serviço.</span>
				</div>
				<div class="input-box">
					<input type="submit" class="btn btn-primary" value="Enviar" />
				</div>
			</div>
		</div>


	</div>
</div>







<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

?>