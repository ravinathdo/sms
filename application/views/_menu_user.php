<!--user Menu Items-->
<?php
$userbean = $this->session->userdata('userbean');
?>
<li>
    <a href="#"><i class="fa fa-calculator"></i> Transaction Cost Calculate<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <!--    <li>
                <a href="<?= base_url('Cost/add'); ?>">Edit</a>
            </li> -->
        <li>
            <a href="<?= base_url('maineditor/loadCalValueEditor'); ?>">Cost (Taxes & Charges)</a>
        </li>
        <li>
            <a href="<?= base_url('Cost/calBasic'); ?>">Share Trading Cal</a>
        </li>

        <li>
            <a href="<?= base_url('Cost/calculator'); ?>">P/L Cal (Advance)</a>
        </li>
        <!--  <li>
            <a href="<?= base_url('Cost/calculator'); ?>">Average Cost Cal</a>
        </li>
        -->
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-user"></i> User<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <!--        <li>
                    <a href="<?= base_url('Users/add'); ?>">Request</a>
                </li>
        
                <li>
                    <a href="<?= base_url('Users'); ?>">User Profile</a>
                </li>-->
        <li>
            <a href="<?= base_url('Users/userProfile'); ?>">Profile</a>
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

    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-arrows"></i> Stock Brokers<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
          <!--  <a href="<?= base_url('mybrokercom/mybrokercompany'); ?>">My Stock Brokers</a> -->
            <a href="<?= base_url('Brokers/mybrokercom'); ?>">All Stockbroker Companies</a>
        </li>
        <li>
          <!--  <a href="<?= base_url('mybrokercom/mybrokercompany'); ?>">My Stock Brokers</a> -->
            <a href="<?= base_url('CDSAccounts/myBrokerCompanies'); ?>">My Stockbroker Companies</a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>
<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> CDS Accounts <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="<?= base_url('CDSAccounts/add'); ?>">Add</a>
        </li>
        <li>
            <a href="<?= base_url('CDSAccounts/myCDSAccount'); ?>">CDS List</a>            
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>

<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Manage Securities <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="<?= base_url('Securities_Controller/'); ?>">Buy Securities</a>
        </li>
        <li>
            <a href="<?= base_url('Securities_Controller/listUserSecurities/' . $userbean->userid); ?>">Sell Securities</a>
        </li>
        <li>
            <a href="<?= base_url('Securities_Controller/getPortfolio'); ?>">List of my Securities (Portfolio)</a>
        </li>
        <li>
            <a href="<?= base_url('Fund_Conntroller/depositFunds/' . $userbean->userid); ?>">Funds (Deposit / Withdraw) </a>
        </li>


        <li>
            <a href="<?= base_url('Securities_Controller/listSummaryView/' . $userbean->userid); ?>">Summary View </a>
        </li>
    </ul>
    <!-- /.nav-second-level -->
</li>

<li>
    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Reports <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="<?= base_url('Fund_Conntroller/depositFundsReport/' . $userbean->userid); ?>">Deposit / Withdraw Report</a>
        </li>
        <li>
            <a href="<?= base_url('Securities_Controller/listSummaryViewReport/' . $userbean->userid); ?>">Summary View Report </a>
        </li>
</li>
