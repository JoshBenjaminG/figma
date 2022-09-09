<?php 


$header = $module["header"];
$content = $module["content"];
$style = $module["type"];
$reviews = $module["reviews"];

?>

<section class="clients">
<inner-column>
	<clients class="<?=$style?>">
		<h1><?=$header?></h1>
		<p><?=$content?></p>
		<div>
			<?php foreach($reviews as $review) { 
				include('client-card.php');
			 } ?>
		</div>
	</clients>
</inner-column>
</section>