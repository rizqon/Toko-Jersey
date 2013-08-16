<h1>
						Product
					</h1>
					<?php echo form_open_multipart('admin/product/edit') ?>
					<?php if (validation_errors()): ?>
    <div class="error_box">
        <?php echo validation_errors(); ?>
    </div>
<?php endif; ?>
						<fieldset>
							<legend>edit Product Record</legend>
							<?php echo form_hidden('product_id', $product['0']['product_id']); ?>
							<div class="control-group">
								<label class="control-label" for="input01">Product Name</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01"/ name="name" value="<?php echo $product['0']['product_name']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Product Price</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01"/ name="price" value="<?php echo $product['0']['product_price']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Product Category</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01"/ name="category_id" value="<?php echo $product['0']['category_id']; ?>">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="fileInput">Product Image</label>
								<div class="controls">
									<?php echo form_upload('image'); ?>
								</div>
							</div>										
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
							</div>
						</fieldset>
					<?php echo form_close(); ?>
					
					