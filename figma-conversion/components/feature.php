<?php 

$image = $module["image"];
$header = $module["header"];
$content = $module["content"];
$style = $module["type"];
$articles = $module["articles"];

?>

<section class="landing">
<inner-column>
	<landing class="<?=$style?>">
		<h1><?=$header?></h1>
		<p><?=$content?></p>
		<picture>
			<img src="<?=$image?>" alt="">
		</picture>
		<div>
			<?php foreach($articles as $article) { ?>
					<article>
						<h3><?=$article["title"]?></h3>
						<p><?=$article["content"]?></p>
					</article>
			<?php } ?>
		</div>
	</landing>
</inner-column>
</section>image