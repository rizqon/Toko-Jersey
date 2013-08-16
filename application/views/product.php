<div class="span7 popular_products">
                    <h4>Popular products</h4><br>
                    <ul class="thumbnails">
<?php
if($products) {
foreach ($products->result() as $p) {
echo '<li class="span2">';
echo    '<div class="thumbnail">';
echo form_open('home/add_cart'); 
echo    	'<a href="product.html"><img alt="" src="'.base_url().'assets/product/'.$p->product_image.'" /></a>';
echo        '<div class="caption">';
echo        '<a href="product.html"> <h5>'.$p->product_name.'</h5></a>Rp.'.$p->product_price.'<br><br>';
echo 			form_input(array('name' => 'quantity', 'class' => 'input-mini', 'placeholder' => 1, 'value' => 1));

$options = array(
					        '-'	=> 'Size',
                  'Small'  => 'S',
                  'Medium'    => 'M',
                  'Large'   => 'L',
                  'Extra Large' => 'XL',
                );
echo '<br>';	
echo form_dropdown('size', $options, '-', 'class="span1"');

				echo form_hidden('produk_id', $p->product_id);
				echo form_submit('submit', 'submit', 'class="btn btn-large btn-primary"');
echo        '</div>';
echo    '</div>';
echo '</li>';

echo form_close(); 
	}
}
?>
   </ul>
        <?php echo $pagination; ?>

</div>
