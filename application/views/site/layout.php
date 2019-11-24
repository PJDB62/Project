<html>
	<head>
		<?php $this->load->view('site/head'); ?>
	</head>
	<body>
		<div class="super_container">
			<div class='header'>
				<?php $this->load->view('site/header'); ?>
			</div>
			<div>
				<?php $this->load->view('site/menu'); ?>
			</div>
			<div>
				<?php $this->load->view($temp); ?>
			</div>
			<div>
				<?php $this->load->view('site/footer'); ?>
			</div>
		</div>
		<footer>
			<?php $this->load->view('site/foot'); ?>
		</footer>
	</body>
	
</html>