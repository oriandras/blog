<?php
include("header.php");
?>
<div class="container">
	<section class="row">
	<?php listazo($_SESSION["day"]); ?>
	</section>
	<hr>
	<aside class="row text-center">
		<div class="col-md-12">
			<h2 class="h2-responsive">Korábbi napok</h2>
			<p>
			<?php
				$query="select DISTINCT(DATE_FORMAT(published, '%Y%m%d')) as days from text WHERE deleted IS NULL ORDER BY `text_id` ASC";
				$result=$DB->query($query);
				while( $napok = mysqli_fetch_assoc( $result ) ){
					echo '<a class="btn btn-dark" href="/'.$napok["days"].'">'.$napok["days"].'</a>';
				}
			?>
			</p>
		</div>
	</aside>
</div>
<?php
include("footer.php");
?>