<?php 

$img = $module["img"];
$header = $module["header"];
$content = $module["content"];
$preHeader = $module["preheader"];

?>

<section class="center-content">
<inner-column>
	<center-content>
		<text-content>
			<p><?=$preHeader?></p>
			<h1 class="loud-voice"><?=$header?></h1>
			<p><?=$content?></p>
		</text-content>
		<picture>
			<img src="<?=$img?>" alt="">
		</picture>
	</center-content>
</inner-column>
</section>