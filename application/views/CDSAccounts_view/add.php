<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SecuritiesLK</title>
       <?php $this->load->view('basecss');?>

</head>

<?php if($this->session->userdata('userbean')){
            $userbean = $this->session->userdata('userbean');
        }else{
            //if invalid session user get redirect to login
            header("Location:". site_url('Login_Controller/logout'));
        }
        ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <div>
          <?php $this->load->view('main_header');?>
        <div>
        <!--/Navigation-->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">CDS Accounts</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                CDS Accounts
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>
                                  <input type="hidden" name="userid" value="<?php echo $userbean->userid ;?>" />
                                <div class="form-group">
                                  <label>Stockbrocker Company</label>
                                  <div class="">
                                      <select class="form-control" name="brokercomid" required="">
                                      <option value="">Select</option>
                                      <?php foreach ($brokercom as $bro){ ?>
                                      <option  value="<?=$bro->brokercomid;?>"  <?=set_select('brokercomid',$bro->brokercomid, $bro->brokercomid == $CDSAccounts->brokercomid ? TRUE : FALSE  ); ?>><?=$bro->name;?></option>
                                        <?php  } ?>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                    <label>CDS Account No</label>
                                      <input required="" name="cdsaccno" type="text" class="form-control" value="<?=set_value('cdsaccno', $CDSAccounts->cdsaccno);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Open Date </label>
                                    <div class='input-group date datepick' > <!--datepicker-->
                                        <input type='text' name="opendate" class="form-control " value="<?=set_value('opendate', $CDSAccounts->opendate);?>" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>


                        <!--    <p>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </p> -->


                            </div>
                        </div>

                        <!--Adviser add/edit -->
                        <div class="panel panel-default">
                             <div class="panel-heading">
                                 Adviser Details
                             </div>
                             <div class="panel-body">


                                  <div class="form-group">
                                     <label>First Name</label>
                                     <input required="" name="adviserfname" type="text" class="form-control" value="<?=set_value('adviserfname', $CDSAccounts->adviserfname)?>" >
                                   </div>

                                   <div class="form-group">
                                      <label>Last Name</label>
                                      <input name="adviserlname" type="text" class="form-control" value="<?=set_value('adviserlname', $CDSAccounts->adviserlname)?>" >
                                    </div>

                                    <div class="form-group">
                                       <label>Telephone Mobile</label>
                                       <input name="tel_mob" type="text" class="form-control" value="<?=set_value('tel_mob', $CDSAccounts->tel_mob)?>" >
                                     </div>

                                     <div class="form-group">
                                        <label>Telephone Direct </label>
                                        <input name="tel_direct" type="text" class="form-control" value="<?=set_value('tel_direct', $CDSAccounts->tel_direct)?>" >
                                      </div>

                                      <div class="form-group">
                                         <label>email</label>
                                         <input name="email" type="text" class="form-control" value="<?=set_value('email', $CDSAccounts->email)?>" >
                                       </div>


                                <p>
                                    <button type="submit" class="btn btn-primary">Add CDS</button>
                                </p>

                           </form>
                             </div>
                         </div>

                         <!--end of Adviser add -->

                    </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

      <?php $this->load->view('basejs');?>
</body>

</html>
