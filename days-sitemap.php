<?php header('Content-type: application/xml; charset=utf-8') ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
include("motor/class_sql.php");
$query="select DISTINCT(DATE_FORMAT(published, '%Y%m%d')) as days from text WHERE deleted IS NULL ORDER BY `text_id` ASC";
$result=$DB->query($query);
while( $napok = mysqli_fetch_assoc( $result ) ){
	$time = DateTime::createFromFormat('Ymd', $napok["days"])->format('Y-m-d');
	//print_r($time);
	//$time=$napok["days"];
	$date=$time." 00:00 +01:00";
?>
	<url>
		<loc>https://oriandras.hu/<?php echo $napok["days"]; ?></loc>
		<lastmod><?php echo $date; ?></lastmod>
		<changefreq>monthly</changefreq>
		<priority>1</priority>
	</url>
<?php
}
?>
</urlset>