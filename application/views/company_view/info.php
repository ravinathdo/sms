<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Company Info</title>
       <?php $this->load->view('basecss');?>

</head>

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
                        <h1 class="page-header">Company Information (<?php echo $company->symbol; ?>) </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Company
                                <p><b> <?php echo $company->com_name; ?> </b></P>
                                  Symbol
                                <p><b> <?php echo $company->symbol; ?> </b></P>

                            </div>
                            <div class="panel-body">

                              <div class="row">
                                <div class="col-lg-12">
                                  <dl class="dl-horizontal text-left">
                                      <dt>Company Name</dt>
                                        <dd>: <?php echo $company->com_name; ?></dd>
                                      <dt>Company Sector</dt>
                                        <dd>: <?php echo $company->sec_name; ?></dd>
                                      <dt>Address</dt>
                                        <dd>: <?php echo $company->address1; ?>
                                          <br/>
                                          &nbsp <?php echo $company->address2; ?>
                                          <br/>
                                          &nbsp <?php echo $company->address3; ?>
                                          <br/>
                                          &nbsp <?php echo $company->address4; ?>
                                        </dd>
                                      <dt>Telephone</dt>
                                        <dd>: <?php echo $company->tel; ?></dd>
                                      <dt>Fax</dt>
                                        <dd>: <?php echo $company->fax; ?></dd>
                                      <dt>Email</dt>
                                        <dd>: <?php echo $company->email; ?></dd>
                                      <dt>Website</dt>
                                        <dd>: <?php echo $company->website; ?></dd>
                                        <dt>Listed Date</dt>
                                          <dd>: <?php echo $company->quoteddate; ?></dd>
                                      <dt>Listed Board</dt>
                                        <dd>: <?php echo $board->boardname; ?></dd>
                                      <dt>Company Secretary</dt>
                                          <dd>: <?php echo $sect->secretaryname; ?></dd>


                                              <?php
                                              if ($ceoinfo != FALSE){
                                                foreach ($ceoinfo as $rows) { ?>
                                                  <dt>CEO</dt>
                                                    <dd>
                                                      <tr>
                                                            <td><?=$rows->prefix;?></td>
                                                            <td><?=$rows->initial;?></td>
                                                            <td><?=$rows->fname;?></td>
                                                            <td><?=$rows->mname;?></td> <br/>
                                                        </tr>
                                                      </dd>
                                                <?php  }
                                              } ?>



                                      <dt>Board of Directors</dt>
                                        <dd>
                                            
                                            
                                            <?php
                                            
                                            //echo '<tt><pre>'. var_export($dirinfo,TRUE).'</pre></tt>';
                                            
                                            
                                            if ($dirinfo != FALSE){
                                              foreach ($dirinfo as $rows) { ?>
                                                    <tr>
                                                          <td>: <?=$rows->prefix;?></td>
                                                          <td><?=$rows->initial;?></td>
                                                          <td><?=$rows->fname;?></td>
                                                          <td><?=$rows->mname;?></td> <br/>
                                                      </tr>
                                              <?php  }
                                            } ?>
                                        </dd>

                                        <hr />

                                        <dt>Securities</dt>
                                            <dd>: <?php echo ("To be added..............."); ?></dd>
                                  </dl>
  <hr />
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?=base_url('company/#/'.$company_id.'');?>" title="Edit">Dividend Details</a>
                                  </div>

                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="<?=base_url('company/#/'.$company_id.'');?>" title="Edit">Financial Details</a>
                                  </div>

                                </div>
                            <!--    <div class="col-lg-4">
                                  <p> Company Name: </p>
                                  <p> Company Sector: </p>
                                  <p> Address: </p>
                                  <p>  </p>
                                  <p>  </p>
                                  <p>  </p>
                                  <p>  </p>
                                  <p> Telephone No: </p>
                                  <p> Fax No: </p>
                                  <p> Email: </p>
                                  <p> Website </p>
                                  <p> Listed Date </P>
                                  <p> Qutoed Date </p>

                                </div>

                                <div class="col-lg-8">
                                  <p><?php echo $company->com_name; ?> </P>
                                    <p><?php echo $company->sec_name; ?> </P>
                                      <p><?php echo $company->address1; ?> </P>
                                        <p><?php echo $company->address2; ?> </P>
                                          <p><?php echo $company->address3; ?> </P>
                                            <p><?php echo $company->address4; ?> </P>

                                              <p><?php echo $company->tel; ?> </P>
                                                <p><?php echo $company->fax; ?> </P>
                                                  <p><?php echo $company->email; ?> </P>
                                                    <p><?php echo $company->website; ?> </P>
                                                      <p><?php echo $company->listedboard; ?> </P>
                                                        <p><?php echo $company->quoteddate; ?> </P>
                                </div>
                              </div> -->

                              <!--Option 2-->
                      <!--        <div class="row">
                                <div class="col-lg-12">
                                  <div class="col-lg-4">
                                      <p> Company Name: </p>
                                  </div>
                                  <div class="col-lg-8">
                                        <p><?php echo $company->com_name; ?> </P>
                                  </div>

                                </div>
                                <div class="col-lg-4">
                                  <p> Company Name: </p>
                                  <p> Company Sector: </p>
                                  <p> Address: </p>
                                  <p>  </p>
                                  <p>  </p>
                                  <p>  </p>
                                  <p>  </p>
                                  <p> Telephone No: </p>
                                  <p> Fax No: </p>
                                  <p> Email: </p>
                                  <p> Website </p>
                                  <p> Listed Date </P>
                                  <p> Qutoed Date </p>
                                </div>

                                <div class="col-lg-8">
                                  <p><?php echo $company->com_name; ?> </P>
                                    <p><?php echo $company->sec_name; ?> </P>
                                      <p><?php echo $company->address1 . ","; ?>
                                        <?php echo $company->address2 . ","; ?>
                                          <?php echo $company->address3 . ","; ?>
                                            <?php echo $company->address4 . "."; ?> </P>

                                              <p><?php echo $company->tel; ?> </P>
                                                <p><?php echo $company->fax; ?> </P>
                                                  <p><?php echo $company->email; ?> </P>
                                                    <p><?php echo $company->website; ?> </P>
                                                      <p><?php echo $company->listedboard; ?> </P>
                                                        <p><?php echo $company->quoteddate; ?> </P>
                                    </div>
                                  </div> -->
                              <!------end of Option 2-->


                            </div>
                        </div>
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
