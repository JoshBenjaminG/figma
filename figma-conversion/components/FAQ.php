<?php 

$details = $module["details"];
$header = $module["header"];
$content = $module["content"];
$style = $module["type"];

?>

<section class="FAQ">
<inner-column>
	<landing class="<?=$style?>">
		<h1><?=$header?></h1>
		<p><?=$content?></p>
		<div>
			<?php foreach($details as $detail) { ?>
				<details>
				    <summary><?=$detail["summary"]?></summary>
				    <?=$detail["content"]?>
				</details>
			<?php } ?>
		</div>
	</landing>
</inner-column>
</section>