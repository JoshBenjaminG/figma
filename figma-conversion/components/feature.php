<?php 

$image = $module["image"];
$header = $module["header"];
$content = $module["content"];
$style = $module["type"];
$articles = $module["articles"];

?>

<section class="feature">
<inner-column>
	<feature class="<?=$style?>">
		<div class="qwer">
			<text-content>
				<h1 class="loud-voice"><?=$header?></h1>
				<p><?=$content?></p>
			</text-content>
			<picture>
				<img src="<?=$image?>" alt="">
			</picture>
		</div>
		<article-grid>
			<?php foreach($articles as $article) { ?>
					<article>
						<text-content>
							<h3 class="medium-voice"><?=$article["title"]?></h3>
							<p><?=$article["content"]?></p>
						</text-content>
					</article>
			<?php } ?>
		</article-grid>
	</feature>
</inner-column>
</section>