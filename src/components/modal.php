<!-- Modal para doar -->

<div class="modal-cad-doacao">
	<div class="modal-area-doacao">
		<div class="close-modal-doacao">
			<div class="close-x bg-danger"><span>X</span></div>
		</div>

		<div class="area-doacao">
			<form method="POST" action="/doacao/save">
				<div>
					<input type="hidden" name="doador_id" value="<?= $loginModel->id ?>" />
				</div>
				<div class="select-ong">
					<select name="ong_id" required>
						<option value="">Selecione uma Ong</option>
						<?php
						foreach ($modelOng->rows as $item) : ?>
							<option value="<?= $item->id ?>"> <?= $item->nome ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="desc-doacao">
					<textarea rows="3" cols="50" name="descricao" placeholder="Descreva o que está sendo doado." required></textarea>
				</div>
				<div class="area-button-doacao">
					<input type="submit" class="btn btn-primary" value="doar"  />
				</div>
			</form>
		</div>

	</div>
</div>

