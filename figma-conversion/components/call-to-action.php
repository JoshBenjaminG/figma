<?php 

$header = $module["header"];
$content = $module["content"];
$style = $module["type"];
$actions = $module["actions"];

?>

<section class="call-to-action">
<inner-column>
	<call-to-action class="<?=$style?>">
		<p><?=$content?></p>
		<h1 class="loud-voice"><?=$header?></h1>
		<div>
			<?php foreach($actions as $action) { ?>
					<button href="" class="<?=$action["link_class"]?>"><?=$action["link"]?></button>
			<?php } ?>
		</div>
	</call-to-action>
</inner-column>
</section>