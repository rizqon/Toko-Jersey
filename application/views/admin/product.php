					<h2>
						product
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Product Image</th>
								<th>Product Name</th>
								<th>Product Category</th>
								<th>Product Prices</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php foreach ($product as $item): ?>
						<tbody>
							<tr>
								
								<td><img height="50" width="50" alt="" src="<?php echo base_url(); ?>assets/product/<?php echo $item['product_image']; ?>" /></td>
								<td><?php echo $item['product_name']; ?></td>
								<td><?php echo $item['name']; ?></td>
								<td><?php echo $item['product_price']; ?></td>
								<td><a href="<?php echo base_url() ?>index.php/admin/product/edit/<?php echo $item['product_id']; ?>">Edit</a> | <a href="<?php echo base_url() ?>index.php/admin/product/delete/<?php echo $item['product_id']; ?>">Hapus</a></td>
                    
								
							</tr>
						</tbody>
						<?php endforeach; ?>
					</table>
					<ul class="pager">
						<li class="next">
							<a href="activity.htm">More &rarr;</a>
						</li>
					</ul>