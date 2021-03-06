<!--business_analyst Menu Items-->
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
    <a href="#"><i class="fa fa-building"></i> Reminders <span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="<?= base_url('Reminder_Controller/reminder'); ?>">Set Reminder</a>
        </li>
        <li>
            <a href="<?= base_url('Reminder_Controller/reminder'); ?>">List Reminder</a>
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
    <a href="#"><i class="fa fa-arrows"></i> Stock Brokers<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a href="<?= base_url('Brokers'); ?>">Stock broker Companies<span class="fa arrow"></span></a>

            <ul class="nav nav-third-level">
                <li>
                    <a href="<?= base_url('Brokers/index'); ?>">Stock Broker Companies</a>
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


    </ul>
    <!-- /.nav-second-level -->
</li>
