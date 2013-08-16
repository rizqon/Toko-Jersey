<!DOCTYPE html>
<html>
    <head>
        <title>NH3Jersey : One Stop Shoping Jersey Ever</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/jquery.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- Start Header-->
            <div class="row">
                <div class="span4 logo">
                    <a href="<?php echo base_url(); ?>">
                        <h1>NH3JERSEY</h1>
                    </a>
                </div>
                <div class="span8">
                    <div class="row">
                        <div class="span1">&nbsp;</div>
                        <div class="span2">
                            <h4>Currency</h4>
                            <a href="#">USD</a> |
                            <a href="#"><strong>GBP</strong></a>
                            <a href="#">EUR</a>
                        </div>
                        <div class="span2">
                            <a href="http://localhost/tokojersey/index.php/home/view_cart"><h4>Shopping Cart</h4></a>
                            <a href="cart.html">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></a>
                        </div>
                        <div class="span3 customer_service">
                            <h4>Free Shipping Promo</h4>
                            <h4><small>Customer service : 083867320189</small></h4>

                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="link pull-right">
                            <a href="<?php echo base_url(); ?>" >Home</a> |
                            <?php 
                            if($this->user_lib->isLogin() == FALSE) {
                            echo '<a href="'.base_url().'index.php/user/login">Login</a>';
                            }else
                            {
                            echo '<a href="'.base_url().'index.php/user/home">My Account</a>';
                            }
                            ?> |
                            <a href="<?php echo base_url(); ?>index.php/home/view_cart">Shopping Cart</a> |
                            <a href="about.html">About</a> |
                            <a href="contact.html">Contact</a>

                            <?php

                            if($this->user_lib->isLogin() == FALSE) {
                            echo '';
                            }else{
                            echo ' | <a href="'.base_url().'index.php/user/logout">Logout</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header-->