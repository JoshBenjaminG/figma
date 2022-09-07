<?php 

$actions = $module["actions"];
$header = $module["header"];
$content = $module["content"];
$style = $module["type"];

?>

<section class="landing">
<inner-column>
	<landing class="<?=$style?>">
		<h1><?=$header?></h1>
		<p><?=$content?></p>
		<div>
			<?php foreach($actions as $action) { ?>
					<button href="" class="<?=$action["link_class"]?>"><?=$action["link"]?></button>
			<?php } ?>
		</div>
	</landing>
</inner-column>
</section>