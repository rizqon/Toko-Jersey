<div class="row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class="container" style="width: auto;">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <div class="nav-collapse">
                                    <ul class="nav">
                                        <li><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
                                        <li><?php 
                            if($this->user_lib->isLogin() == FALSE) {
                            echo '<a href="'.base_url().'index.php/home/category/jacket">Jacket</a>';
                            }else
                            {
                            echo '<a href="'.base_url().'index.php/user/home">My Account</a>';
                            }
                            ?></li>
                                        <li><?php 
                            if($this->user_lib->isLogin() == FALSE) {
                            echo '<a href="'.base_url().'index.php/home/category/grade-ori">Jersey</a>';
                            }else
                            {
                            echo '<a href="'.base_url().'index.php/user/history">History</a>';
                            }
                            ?></li>
                                        
                                        <li><?php 
                            if($this->user_lib->isLogin() == FALSE) {
                            echo '<a href="'.base_url().'index.php/user/login">Login</a>';
                            }else
                            {
                            echo '<a href="'.base_url().'index.php/user/update_profile">Update Profile</a>';
                            }
                            ?></li>

                            <li><?php 
                            if($this->user_lib->isAdminLogin() == FALSE) {
                            echo '';
                            }else
                            {
                            echo '<a href="'.base_url().'index.php/admin/home">Administrator</a>';
                            }
                            ?></li>


                                    </ul>
                                    <ul class="nav  pull-right">
                                        <li class="divider-vertical"></li>
                                        <form class="navbar-search" method="get" action="">
                                            <input class="search-query  span2" placeholder="search" type="text"/>
                                            <button class="btn btn-primary btn-small" type="submit">Go</button>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">