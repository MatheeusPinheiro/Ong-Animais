<?php
session_start() or die;
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>


<div class="container mt-5 bg-primary text-center ">
	<div class="h2 p-2 text-light">Pets disponíveis para adoção</div>
</div>


<div class="container-animais  p-2">

	<div class="animais-grid">

	</div>
</div>




<!-- Clona animais-card -->

<div class="clone">
	<div class="animais-card p-2">
		<div class="animal-img">
			<img src="../../assets//images/dog.jpg" alt="foto-dos-animais" />
		</div>
		<div class="animal-desc mt-2">
			<div class="h5">...</div>
		</div>
		<div class="desc-animal text-center">
			...
		</div>
		<div class="">
			<a href="#" class="btn btn-primary mt-2 ">Quero adotar</a>
		</div>
	</div>
</div>



<!-- FOOTER-->
<?php

include './Views/partials/Footer/footer.php';

?>