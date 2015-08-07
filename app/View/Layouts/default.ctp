<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
	<div class="container-fluid">
		<?php 
		 echo $this->element("header");
		 echo $this->fetch('content');
		 echo $this->element("footer");
		?>
	</div>
</body>
</html>
