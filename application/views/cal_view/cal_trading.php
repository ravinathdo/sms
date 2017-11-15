<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trading Cal</title>
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
                        <h1 class="page-header">Share Trading Calculator </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">


                          <div class="col-lg-3">
                             <div class="panel panel-default">
                                  <div class="panel-heading">
                                      Type
                                  </div>

                                  <div class="panel-body">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <dl class="dl-horizontal text-left">


                                          <div class="form-group">
                                                    <!--  <label>Transaction Cost</label> -->
                                                      <div class="radio">
                                                          <label>
                                                              <input name="type" id="upto50" value="share" checked="checked" <?=set_radio('type');?> type="radio">Buy
                                                          </label>
                                                      </div>
                                                      <div class="radio">
                                                          <label>
                                                              <input name="type" id="over50" value="unit" <?=set_radio('type');?> type="radio">Sell
                                                          </label>
                                                      </div>
                                                    <!--  <div class="radio">
                                                          <label>
                                                              <input name="optionsRadios" id="optionsRadios3" value="option3" type="radio">Radio 3
                                                          </label>
                                                      </div> -->
                                                  </div>

                                        </dl>
                                      </div>

                                  </div>
                              </div>
                          </div>
          </div>



                    <div class="col-lg-6">
                       <div class="panel panel-default">
                         <div class="panel-heading">
                             <i class="fa fa-calculator"></i> Share Trading Calculator
                         </div>

                            <div class="panel-body">
                              <div class="row">
                                <div class="col-lg-12">
                                  <dl class="dl-horizontal text-left">


<?php echo form_open('Calc/getvalue/'); ?>
                                      <div class="form-group">
                                          <label>Share Price </label>
                                          <input type="text" name="shareprice" class="form-control text-right " min="0.00" max="2500.00"   />
                                      </div>

                                      <div class="form-group">
                                          <label>Quantity </label>
                                          <input name="qty" type="text" class="form-control" value="1">
                                      </div>

                                      <div class="form-group">
                                          <label>Tax & Charges % </label>
                                          <input name="tax" type="text" class="form-control  text-right">
                                      </div>



                                      <p align = left>
                                      <input type="submit" value="Calculate" name="submit" class="btn btn-primary">
                                      <button type="reset" class="btn btn-primary">Clear</button>
                                      </p>


                                  <!--    <input type="text" name="name" value="" size="50" />
                                      <div><input type="submit" value="Submit" name="submit"/></div> -->
<?php echo form_close(); ?>


                                    <!--  <div class="form-group">
                                          <label>Profit / Loss </label>
                                          <input name="PandL" type="text" class="form-control" value="<?=set_value('PandL')?>" >
                                      </div> -->

                                  </dl>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->


        </div>
        </div>

    </div>
    <!-- /#wrapper -->

      <?php $this->load->view('basejs');?>
</body>

</html>
