<div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">

                                            <div class="span3 no_margin_left">
                                                <?php echo form_open('user/register') ?>
                                                <h4>Register</h4>
                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Nama Lengkap:</strong></label>
                                                    <input type="text" class="contact_input" name="full_name" value="<?php echo set_value('full_name'); ?>"/>
                                                 </div>  

                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Email:</strong></label>
                                                    <input type="text" class="contact_input" name="email" value="<?php echo set_value('email'); ?>" />
                                                </div>
                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Password:</strong></label>
                                                    <input type="password" class="contact_input" name="password" />
                                                </div>
                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Ulangi Passoword:</strong></label>
                                                    <input type="password" class="contact_input" name="confirm_password" />
                                                </div>
                                                <div class="control-group">
                                                    <input type="Submit" value="Continue" class="btn btn-primary"/>
                                                </div>
                                            </div>

                                            <div class="span3 ">
                                                <br>
                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Telepon:</strong></label>
                                                    <input type="text" class="contact_input" name="phone" value="<?php echo set_value('phone'); ?>" />
                                                </div>
                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Kode Pos:</strong></label>
                                                    <input type="text" class="contact_input" name="zip" value="<?php echo set_value('zip'); ?>" />
                                                </div>
                                                <div class="control-group">
                                                    <label for="focusedInput" class="control-label"><strong>Alamat Lengkap:</strong></label>
                                                    <textarea rows="5" style="overflow:auto;resize:none" name="address"><?php echo set_value('address'); ?></textarea>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="span5">
                                                <h4>Registered Customers</h4>
                                                <?php echo form_open('user/login'); ?>
                                                <p>If you have an account with us, please log in.</p>
                                                <form class="">
                                                    <fieldset>
                                                        <div class="control-group">
                                                            <label for="focusedInput" class="control-label">Username</label>
                                                            <div class="controls">
                                                                <input name="email" "type="text" placeholder="Enter your Email" class="input-xlarge focused">
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <label class="control-label">Password</label>
                                                            <div class="controls">
                                                                <input type="password" placeholder="Enter your password" class="input-xlarge" name="password">
                                                            </div>
                                                        </div>

                                                        <input type="submit" value="Login" class="btn btn-primary pull-left" />

                                                    </fieldset>
                                                    <?php echo form_close(); ?>
                                                </form>
                                                <?php echo validation_errors(); ?>
                                                <?php if ($this->session->flashdata('message')): ?>
                                                    <?php echo $this->session->flashdata('message'); ?>
                                                <?php endif ?>  
                                            </div>


                                        </div>
                                    </div>
