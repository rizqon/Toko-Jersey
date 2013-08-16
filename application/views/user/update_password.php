<div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <?php echo form_open('user/update_password') ?>
                                            

                                            <div class="span6 no_margin_left">
                                                <legend>Update Password</legend>    

                                                <div class="control-group">
                                                    <label class="control-label">Password</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="password" placeholder="" class="span4" name="password" value="<?php //echo $usr['full_name']; ?>">
                                                    </div>
                                                </div>
                                                                 
                                                <div class="control-group">
                                                    <label class="control-label">Confirm Password</label>
                                                    <div class="controls docs-input-sizes">
                                                        <input type="password" placeholder="" class="span4" name="confirm_password" value="<?php //echo $usr->email; ?>">
                                                    </div>
                                                </div>                   

                                                 <div class="control-group">
                                                    <input type="Submit" value="Submit" class="btn btn-primary"/>
                                                </div>
                                                 <?php echo validation_errors(); ?>
                                                <?php if ($this->session->flashdata('message')): ?>
                                                    <?php echo $this->session->flashdata('message'); ?>
                                                <?php endif ?> 
                                                <?php echo form_close(); ?> 
                                            </div>
                                        </div>
                                    </div>