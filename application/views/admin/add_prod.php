<h1>
						Product
					</h1>
					<?php echo form_open_multipart('admin/product/add') ?>
						<fieldset>
							<legend>Add Product Record</legend>
							<div class="control-group">
								<label class="control-label" for="input01">Product Name</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01"/ name="name">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Product Price</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01"/ name="price">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Product Category</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01"/ name="category_id">
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