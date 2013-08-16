<?php 
echo '<div class="span3 product_list">';
echo 	'<ul class="nav">';
foreach ($categories as $cat) {

    echo '<li><a href="'.base_url().'index.php/home/category/'.$cat['permalink'].'">'.$cat['category_name'].'</a></li>';
 }
echo     '</ul>';
echo '</div>';

?>