<div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <?php echo form_open('order/proses') ?>
                                            <?php foreach ($user->result() as $usr): 
                                            //echo '<pre>';
                                            //echo var_dump($usr['full_name']);
                                            //echo '</pre>';
                                            ?>

                                            <div class="span6 no_margin_left">
                                                <legend>Your Personal Details</legend>
                                                <div class="control-group">
                                                    <label class="control-label">Full Name</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="text" placeholder="" class="span4" name="full_name" value="<?php echo $usr->full_name; ?>">
                                                    </div>
                                                </div>
                                                                 
                                                <div class="control-group">
                                                    <label class="control-label">Email Address</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="text" placeholder="" class="span4" name="email" value="<?php echo $usr->email; ?>">
                                                    </div>
                                                </div>                   

                                                <div class="control-group">
                                                    <label class="control-label">Telephone</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="text" placeholder="" class="span4" name="phone" value="<?php echo $usr->phone; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span5">
                                                <legend>Your Address </legend>
                                                <div class="control-group">
                                                    <label class="control-label">Address</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="text" placeholder="" class="span4" name="address" value="<?php echo $usr->address; ?>">
                                                    </div>
                                                </div>
                                                                    
                                                <div class="control-group">
                                                    <label class="control-label">City</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="text" placeholder="" class="span4" name="city" value="<?php echo $usr->city; ?>">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label">ZIP</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="text" placeholder="" class="span4" name="zip" value="<?php echo $usr->zip; ?>">
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <input type="Submit" value="Checkout!" class="btn btn-primary"/>
                                                </div>
                                                <?php endforeach; ?> 
                                                <?php echo form_close(); ?>               
                                            </div>
                                        </div>
                                    </div>
