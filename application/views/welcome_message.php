<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Import Excel Sheet data</title>
</head>
<body>
	<form action="<?=base_url("welcome/index")?>" enctype="multipart/form-data" method="post">
		<input type="file" name="upload_excel" required />
		<input type="submit" name="submit" value="Submit">
		<?php if($this->session->flashdata('success'))  { ?>
			<p><?=$this->session->flashdata('success')?></p>
		<?php  } ?>
		<?php if($this->session->flashdata('error'))  { ?>
			<p><?=$this->session->flashdata('error')?></p>
		<?php  } ?>
	</form>
</body>
</html>
