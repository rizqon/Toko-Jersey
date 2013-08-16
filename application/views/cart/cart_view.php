<div class="span12">
                    <h1> Shopping Cart</h1><br />
                    <?php echo form_open('cart/update'); ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $items): ?>

                        <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                            <tr>
                                <td class=""><a href="<?php echo base_url() ?>index.php/cart/delete/<?php echo $items['rowid'] ?>">Hapus</a></td>
                                <td class="muted center_text">
                                <img height="75" width="75" alt="" src="<?php echo base_url().'assets/product/'.$items['options']['pic']; ?>" /></td>
                                <td><?php echo $items['name']; ?></td>
                                <td><?php echo $items['options']['size']; ?></td>
                                <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'class' => 'input-mini', 'placeholder' => $items['qty'])); ?></td>
                                <td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
                                <td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                            </tr>
                        <?php endforeach; ?>			  			 
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><strong>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
                            </tr>		  
                        </tbody>
                    </table>

                    <form class="form-horizontal">
                        <fieldset>	 
                            <div class="row">
                                <div class="span5">
                                    <input type="submit" value="Update"class="btn btn-primary pull-left">
                                </div>
                                <?php echo form_close(); ?>	 
                                <div class="span2">
                                    <a href="<?php echo base_url(); ?>index.php/home" class="btn btn-primary">Continue shopping</a>
                                </div>		  
                                <div class="span5">
                                    <a href="<?php echo base_url(); ?>index.php/order/checkout" class="btn btn-primary pull-right">Checkout</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        <div>