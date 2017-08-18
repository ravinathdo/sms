<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Approved</title>
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
                        <h1 class="page-header">User Approval </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->



                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                User Infromation
                            </div>

                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <dl class="dl-horizontal text-left">
                                      <dt>First Name</dt>
                                        <dd>: <?php echo $userApp->fname; ?></dd>


                                        <dt>Name</dt>
                                          <dd>
                                              <?php
                                              if ($userApp != FALSE){
                                                foreach ($userApp as $rows) { ?>
                                                      <tr>
                                                            <td><?=$rows->fname;?></td>
                                                            <td><?=$rows->lname;?></td>
                                                            <td><?=$rows->mobile;?></td>
                                                            <td><?=$rows->email;?></td> <br/>
                                                        </tr>
                                                <?php  }
                                              } ?>
                                          </dd>


                                  </dl>
                                </div>

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
