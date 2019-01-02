<?php
session_start();
include("header.php");
if($_POST["addtext"]==1){
	echo "zzzz";
	print_r($_POST);
	$now=date("Y-m-d H:i:s");
	if($POST["published"]){
		$published=$_POST["published"];
	}
	else {
		$published=$now;
	}
	$query="INSERT INTO `text`(`content`, `created`, `published`) VALUES ('".$_POST['text']."','".$now."','".$published."')";
	$DB->query($query);
}
?>
<form action="/add_text.php" method="post">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="md-form">
				<textarea class="summernote md-textarea form-control" rows="10" name="text">
				</textarea>
			</div>
		</div>
		<?php /*
		<div class="col-md-6">
			<div class="md-form">
				<input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker" name="published">
				<label for="date-picker-example">Try me...</label>
			</div>
		</div>
		*/
		?>
		<div class="col-md-12">
			<div class="md-form text-right">
				<button type="submit" class="btn btn-primary" name="addtext" value="1">Mentés</button>
			</div>
		</div>
	</div>
</div>
</form>
<?php
include("footer.php");
?>