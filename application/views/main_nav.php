<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>





            <?php
            if ($this->session->userdata('userbean')) {
                $userbean = $this->session->userdata('userbean');
            } else {
                header("Location:" . site_url('Login_Controller/logout'));
            }
            ?>



            <?php if ($userbean->role == 'user') { ?>
                <?php $this->load->view('_menu_user') ?>
            <?php } else if ($userbean->role == 'admin') { ?>
                <?php $this->load->view('_menu_admin') ?>
            <?php } else if ($userbean->role == 'business_analyst') { ?>
                <?php $this->load->view('_menu_business_analyst') ?>
            <?php } else if ($userbean->role == 'data_entry_operator') { ?> 
                <?php $this->load->view('_menu_data_entry_operator') ?>
            <?php } ?> 













        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
