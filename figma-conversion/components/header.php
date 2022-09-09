<?php 

$actions = $module["actions"];
$style = $module["type"];

?>
	
	<body>
		<div class='site-header'>
		<inner-column>

			<header class="<?=$style?>">

				<nav><img src="images/logoipsum.svg" alt="" class="logo"></nav>

				<nav class='links'>
					<a href="">Home</a>
					<a href="">Updates</a>
					<a href="">Services</a>
					<a href="">Features</a>
					<a href="">About Us</a>
				</nav>

				<nav class='links'>
				<?php foreach($actions as $action) { ?>
					<a href="" class="<?=$action["link_class"]?>"><?=$action["link"]?></a>
				<?php } ?>
				</nav>

			</header>

		</inner-column>
		</div>


		<main class='page-content'>
			<!-- STUFF -->
