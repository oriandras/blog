<script type="text/javascript" src="layout/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="layout/js/popper.min.js"></script>
<script type="text/javascript" src="layout/js/bootstrap.min.js"></script>
<script type="text/javascript" src="layout/js/mdb.min.js"></script>
<script type="text/javascript" src="layout/js/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
	$('.summernote').summernote();
	// Data Picker Initialization
	$('.datepicker').pickadate(
		{
			formatSubmit: 'yyyy-mm-dd '
		}
	);
});
</script>
</body>
</html>