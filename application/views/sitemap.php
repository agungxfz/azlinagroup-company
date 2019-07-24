<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url(); ?></loc>
        <priority>1.0</priority>
    </url>

    <?php foreach ($links as $data) { ?>
        <url>
            <loc><?php echo base_url() . 'index.php/nav/' . $data->id_menu; ?></loc>
            <priority>0.5</priority>
            <lastmod><?php echo $data->create_date; ?></lastmod>
        </url>
    <?php } ?>
</urlset>