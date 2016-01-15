<!DOCTYPE html>
<html>
	<head>
		<title>Otters</title>
	</head>
	<body>
		<?php // echo '<pre>'; print_r(get_loaded_extensions()); echo '</pre>'; ?>
		<?php echo '<p>' . (class_exists('SoapClient') === true ? 'SOAP installed' : 'SOAP not installed') . '</p>'; ?>
		<div><img src="otter-pups.jpg" alt="otters" /></div>
	</body>
</html>