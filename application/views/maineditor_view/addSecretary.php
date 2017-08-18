<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Secretary</title>
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
                        <h1 class="page-header">Add Secretary</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Add Company Secretary
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>

                                <div class="form-group">
                                    <label>Secretary Name</label>
                                      <input name="secretaryname" type="text" class="form-control" value="<?=set_value('secretaryname', $secredit->secretaryname);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                      <input name="address" type="text" class="form-control" value="<?=set_value('address', $secredit->address);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Telephone 1</label>
                                      <input name="tel1" type="text" class="form-control" value="<?=set_value('tel1', $secredit->tel1);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Telephoe 2</label>
                                      <input name="tel2" type="text" class="form-control" value="<?=set_value('tel2', $secredit->tel2);?>" />
                                </div>

                                <div class="form-group">
                                    <label>fax</label>
                                      <input name="fax" type="text" class="form-control" value="<?=set_value('fax', $secredit->fax);?>" />
                                </div>

                                <div class="form-group">
                                    <label>email</label>
                                      <input name="email" type="text" class="form-control" value="<?=set_value('email', $secredit->email);?>" />
                                </div>

                                <div class="form-group">
                                    <label>contactperson</label>
                                      <input name="contactperson" type="text" class="form-control" value="<?=set_value('contactperson', $secredit->contactperson);?>" />
                                </div>





                                <p>
                                    <button type="submit" class="btn btn-primary">Save</button>
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
