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


            
         

            <?php if($this->session->userdata('userbean')){
                $userbean = $this->session->userdata('userbean');
                echo $userbean->email;
            }else{
                echo 'session out';
            }?>
            
            
            
            <?php if($userbean->role == 'user') { ?>
                
            <li>
                <a href="<?php echo base_url('#'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
                
                
            <?php } else { ?>
                
                
            
            <li>
                <a href="#"><i class="fa fa-calculator"></i> Transaction Cost Calculate<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <!--    <li>
                            <a href="<?= base_url('Cost/add'); ?>">Edit</a>
                        </li> -->
                    <li>
                        <a href="<?= base_url('Cost'); ?>">Cost (Taxes & Charges)</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Cost/calculator'); ?>">P/L Cal (Basic)</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Cost/calculator'); ?>">P/L Cal (Advance)</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Cost/calculator'); ?>">Average Cost Cal</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            
            
            <!--
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Student<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?= base_url('students'); ?>">List</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('students/add'); ?>">Add</a>
                                </li>
                            </ul>
            <!-- /.nav-second-level -->
            <!--          </li>
          
          
                      <li>
                          <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Employee<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?= base_url('employee'); ?>">List</a>
                              </li>
                              <li>
                                  <a href="<?= base_url('employee/add'); ?>">Add</a>
                              </li>
                          </ul>
            <!-- /.nav-second-level -->
            <!--      </li> -->

            <li>
                <a href="#"><i class="fa fa-user"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">                
                    <li>
                        <a href="<?= base_url('Users/add'); ?>">Request</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Users'); ?>">List of Users</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Users'); ?>">User Profile</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-building"></i> Company<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('Company'); ?>">List</a>
                    </li>
                    <li>
                        <a href="<?= base_url('company/add'); ?>">Add</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-arrows"></i> Stock Brokers<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('Brokers'); ?>">Stockbroker Companies<span class="fa arrow"></span></a>

                        <ul class="nav nav-third-level">
                            <li>
                                <a href="<?= base_url('Brokers/index'); ?>">All Broker Compaines</a>
                            </li>

                            <?php
                            $this->db->order_by('type', 'ASC');
                            $query = $this->db->get('brokercomtype')->result();

                            foreach ($query as $row) {
                                ?>
                                <li>
                                    <a href="<?= base_url('Brokers/getlist/' . $row->typeslug); ?>" ><?= $row->type; ?></a>
                                </li>
<?php } ?>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('Brokers/add'); ?>">Add Broker Company</a>
                    </li>
                    <li>
                      <!--  <a href="<?= base_url('mybrokercom/mybrokercompany'); ?>">My Stock Brokers</a> -->
                        <a href="<?= base_url('Brokers/mybrokercom'); ?>">My Stockbroker Companies</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> CDS Accounts <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('CDSAccounts'); ?>">CDS List</a>
                    </li>
                    <li>
                        <a href="<?= base_url('CDSAccounts/add'); ?>">Add</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> Main Editor (Admin) <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= base_url('maineditor'); ?>">View/Edit</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/add'); ?>">New Title</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/adddir'); ?>">New Director</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addDesig'); ?>">New Director's Designation</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addSectors'); ?>">New Sector</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addSecretary'); ?>">New Secretary</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addBrokerComType'); ?>">New Broker Company Type</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addBanks'); ?>">New Bank</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addBankBranch'); ?>">New Bank Branch</a>
                    </li>
                    <li>
                        <a href="<?= base_url('maineditor/addBankBrGrade'); ?>">New Bank Branch Grade</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>



            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="active" href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
                
                
            <?php } ?>
            
            
            
            
            
            
            
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
