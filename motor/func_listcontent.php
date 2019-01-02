<?php
function listazo($day) {
	global $DB;
	global $day;
$query='SELECT * FROM `text` WHERE DATE(`published`) = "'.$day.'" AND `deleted` IS NULL';
$result=$DB->query($query);
	$count=0;
	while( $bejegyzes = mysqli_fetch_assoc( $result ) ){
?>
	<article id="article-<?php echo $bejegyzes['id']; ?>" class="col-md-12 order-<?php echo $bejegyzes['text_id']; ?>">
		<header>
			<p class="small text-muted"><?php echo $bejegyzes['published']; ?> | <?php echo $bejegyzes['text_id']; ?></p>
		</header>
		<?php echo $bejegyzes['content']; ?>
	</article>
<?php
	$count++;
	}//endwhile
	if($count===0){
?>
	<article class="no-content">
		<p>Ezen a napon nincs bejegyzés.</p>
	</article>
<?php
	}
}// func listazo(day)
?>