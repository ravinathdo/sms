<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Integrated Securities Portfolio Management System 
            <?php
            if ($this->session->userdata('userbean')) {
                $userbean = $this->session->userdata('userbean');
            } else {
                //if invalid session user get redirect to login
                header("Location:" . site_url('Login_Controller/logout'));
            }
            ?>
        </a>
    </div>
    <!-- /.navbar-header -->

    
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <a  href="<?php echo site_url('Login_Controller/loadhome') ?>"> 
                <i class="fa fa-home fa-fw"></i> Home 
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> 
                <i class="fa fa-envelope fa-fw"></i> Profile <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">

                <?php
                $ssn_cdsAccList = $this->session->userdata('cdsacclist');

                if ($ssn_cdsAccList != FALSE) {

                    foreach ($ssn_cdsAccList as $rows) {
                        ?>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><?= $rows->name; ?></strong>
                                    <span class="pull-right text-muted">
                                        <em><?= $rows->cdsaccno; ?></em> 
                                    </span>
                                </div>
                                <div>
                                    <table border="0" class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td colspan="2"><?= $rows->opendate; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?= $rows->adviserfname; ?></td>
                                                <td><?= $rows->tel_mob; ?></td>
                                            </tr>
                                            <tr>
                                                <td><?= $rows->adviserlname; ?></td>
                                                <td><?= $rows->tel_direct; ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?= $rows->email; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <?php
                    }
                }
                ?>

                <li class="divider"></li>
                <li>
                    <a class="text-center" href="<?php echo site_url('CDSAccounts/getUserCDSAccounts') ?>">
                        <strong>Detail View</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>

            </ul>
            <!-- /.dropdown-messages -->
        </li>
        
       
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  Welcome <?php echo $userbean->fname; ?>
                ( <?php echo $userbean->role; ?> ) 
                <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
<!--                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>-->
                <li><a href="<?php echo site_url('Login_Controller/loadChangePassword') ?>"><i class="fa fa-gear fa-fw"></i> Change Password</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url('Login_Controller/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <?php $this->load->view('main_nav'); ?>
</nav>
