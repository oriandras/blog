<?php header('Content-type: application/xml; charset=utf-8') ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<sitemap>
		<loc>https://oriandras.hu/regi/post-sitemap1.xml</loc>
		<lastmod>2017-03-31 10:44 +01:00</lastmod>
	</sitemap>
	<sitemap>
		<loc>https://oriandras.hu/regi/post-sitemap2.xml</loc>
		<lastmod>2018-11-10 08:44 +00:00</lastmod>
	</sitemap>
	<sitemap>
		<loc>https://oriandras.hu/regi/page-sitemap.xml</loc>
		<lastmod>2016-11-28 15:45 +00:000</lastmod>
	</sitemap>
	<sitemap>
		<loc>https://oriandras.hu/days-sitemap.xml</loc>
		<lastmod><?php echo date("Y-m-d H:i:s"); ?> +01:000</lastmod>
	</sitemap>
</sitemapindex>