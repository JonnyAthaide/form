<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('header') ?>
	<body>

	<div id="container">
		<h1>View de Form</h1>

		<div>
			<?php 
				echo form_open('pagina/msg');
				
				echo form_label('Nome', 'nome');
				echo form_input('nome', set_value('nome'));

				echo form_submit('enviar', 'Enviar');

				echo form_close();

			?>
		</div>
	</div>

<?php $this->load->view('footer') ?>