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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Nine Nine Company (Pvt.) Ltd.</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

              <?php $this->load->view('main_nav');?>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Director List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                      <!-- /.panel -->
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-clock-o fa-fw"></i> Companies
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">

                        <ul class="nav nav-pills">
                              <li  class="active"><a aria-expanded="true" href="#list-pills" data-toggle="tab">List</a>
                              </li>
                              <li><a aria-expanded="false" href="#add-pills" data-toggle="tab">Add</a>
                              </li>
                          </ul>

                          <div class="tab-content">
                                <div class="tab-pane fade active in" id="list-pills">
                                    <h4>Directors List</h4>
                                    <?php if($this->session->flashdata('success_msg')){ ?>
                                       <div class="alert alert-success">
                                            <?=$this->session->flashdata('success_msg');?>
                                       </div>
                                   <?php } ?>
                                    <div class="table-responsive dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company ID</th>
                                        <th>Title</th>
                                        <th>initial</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                      <?php

                                    //  echo '<div>gggg</div>';


                                      if ($directors_list != FALSE){
                                        foreach ($directors_list as $rows) {
                                           ?>
                                              <tr>
                                                    <td><?=$rows->dirid;?></td>
                                                    <td><?=$rows->comid;?></td>
                                                    <td><?=$rows->title;?></td>
                                                    <td><?=$rows->initial;?></td>
                                                    <td><?=$rows->fname;?></td>
                                                    <td><?=$rows->mname;?></td>
                                                    <td><?=$rows->lname;?></td>

                                                    <td><div class="btn-group">
                                                      <a class="btn btn-primary" href="<?=base_url('company/Directors/'.$rows->dirid. "#add-pills".'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                      <!--<a class="btn btn-primary" href="#add-pills" data-toggle="tab"<?=base_url('company/directors/edit/'.$rows->dirid.'');?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a>-->
                                                        </div>

                                                    </td>
                                                </tr>

                                      <?php  }
                                    }
                                        ?>


                                    </tbody>
                                    </table>
                                    </div>
                                    <!-- /.table-responsive -->

                                </div>
                                <div class="tab-pane fade " id="add-pills">
                                    <h4>Add director</h4>
                                    <form class="" action="" method="post">

                                      <div class="form-group">
                                        <label>Director's Name</label>
                                        <div class="">
                                          <select class="form-control" name="dirid">
                                            <option value="">Select</option>
                                            <?php foreach ($directors as $dir){ ?>
                                            <option value="<?=$dir->dirid;?>"  <?=set_select('dirid',$dir->dirid, $dir->dirid == $director->dirid ? TRUE : FALSE  ); ?>><?=$dir->title." ".$dir->fname." ".$dir->mname;?></option>
                                              <?php  } ?>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <label>Title</label>
                                          <input name="title" type="text" class="form-control" value="<?=set_value('title')?>" >
                                      </div>
                                      <div class="form-group">
                                          <label>Initials</label>
                                          <input name="initial" type="text" class="form-control" value="<?=set_value('initial')?>" >
                                      </div>
                                      <div class="form-group">

                                          <label>First Name</label>
                                          <input name="fname" type="text" class="form-control" value="<?=set_value('fname')?>" >
                                      </div>
                                      <div class="form-group">

                                          <label>Middle Name</label>
                                          <input name="mname" type="text" class="form-control" value="<?=set_value('mname')?>" >
                                      </div>
                                      <div class="form-group">

                                          <label>Last Name</label>
                                          <input name="lname" type="text" class="form-control" value="<?=set_value('lname')?>" >
                                      </div>
                                      <div class="form-group">

                                          <label>Appointed Date</label>
                                          <input name="ceo" type="text" class="form-control" value="<?=set_value('ceo')?>" >
                                      </div>
                                      <button type="submit" class="btn btn-primary" data-dismiss="modal">Add</button>
                                    </form>
                                </div>
                          </div>


                          </div>
                          <!-- /.panel-body -->

                      </div>
                      <!-- /.panel -->
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
