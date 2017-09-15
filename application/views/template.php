<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
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
                        <h1 class="page-header">CDS Broker Additional</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    
                    
                    
                    <div class="col-lg-6">
                       6

                    </div>
                    <div class="col-lg-6">
                        6
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
