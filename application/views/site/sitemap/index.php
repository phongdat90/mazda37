<?php echo '<?xml version="1.0" encoding="UTF-8"?>'?>

<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>https://maytinhtandat.com/</loc>
  <changefreq>weekly</changefreq>
  <priority>1.00</priority>
</url>

<?php foreach($list_dm as $row):?>
<url>
  <loc><?php echo base_url($row->slug).'/'?></loc>
  <changefreq>weekly</changefreq>
  <priority>0.80</priority>
</url>
<?php endforeach;?>


<url>
  <loc>https://maytinhtandat.com/san-pham/</loc>
  <changefreq>weekly</changefreq>
  <priority>0.80</priority>
</url>

<?php foreach($list_sp as $row):?>
<url>
  <loc><?php echo base_url($row->slug.'-'.$row->id.'.html')?></loc>
  <changefreq>daily</changefreq>
  <priority>0.60</priority>
</url>
<?php endforeach;?>

<url>
  <loc>https://maytinhtandat.com/gioi-thieu/</loc>
  <changefreq>weekly</changefreq>
  <priority>0.80</priority>
</url>

<?php foreach($list_gt as $row):?>
<url>
  <loc><?php echo base_url('gioi-thieu/'.$row->slug.'.html');?></loc>
  <changefreq>weekly</changefreq>
  <priority>0.50</priority>
</url>
<?php endforeach;?>

<url>
  <loc>https://maytinhtandat.com/tin-tuc/</loc>
  <changefreq>weekly</changefreq>
  <priority>0.80</priority>
</url>

<?php foreach($list_news as $row):?>
<url>
  <loc><?php echo base_url('tin-tuc/'.$row->slug.'.html');?></loc>
  <changefreq>weekly</changefreq>
  <priority>0.70</priority>
</url>
<?php endforeach;?>



<url>
  <loc>https://maytinhtandat.com/dich-vu/</loc>
  <changefreq>weekly</changefreq>
  <priority>0.80</priority>
</url>

<?php foreach($list_dv as $row):?>
<url>
  <loc><?php echo base_url('dich-vu/'.$row->slug.'.html');?></loc>
  <changefreq>weekly</changefreq>
  <priority>0.70</priority>
</url>
<?php endforeach;?>






</urlset>