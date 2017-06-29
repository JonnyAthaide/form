<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('header') ?>

	<div id="container">
		<p>Preencha o formulário abaixo para encaminhar seus dados.</p>

		<div>
			<span id="cont"></span>
			<p>Falha ao preencher o campo <span>Nome Completo</span>. Por favor, corrija as informações para prosseguir</p>
		</div>

		<div>
			<p>Nome Completo <span>*</span></p>
			<?php echo form_input('nome', set_value('nome'));?>			
		</div>

		<div>
			<p>CPF / CNPJ <span>*</span></p>
			<?php echo form_input('cfp_cnpj', set_value('cpf_cnpj'));?>			
		</div>

		<div>
			<div>
				<p>Celular <span>*</span></p>
				<?php echo form_input('celular', set_value('celular'));?>				
			</div>
			<a href="">Adicionar</a>
			<div>
				<p>Telefone <span></span></p>
				<?php echo form_input('telefone', set_value('telefone'));?>			
			</div>
		</div>
		

		<div>
			<p>Email <span>*</span></p>
			<?php echo form_input('email', set_value('email'));?>			
		</div>

		<hr>

		<!--div>
			<?php 
				echo form_open('pagina/msg');
				
				echo form_label('Nome', 'nome');
				echo form_input('nome', set_value('nome'));

				echo form_submit('enviar', 'Enviar');

				echo form_close();

			?>
		</div-->
	</div>

<?php $this->load->view('footer') ?>