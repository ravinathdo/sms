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
                        <h1 class="page-header">Add a Company </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">
                                Company Details
                            </div>
                            <div class="panel-body">
                              <form class="" action="" method="post">
                                <?php echo validation_errors();?>
                                <div class="form-group">
                                    <label>Symbol</label>
                                    <input name="symbol" type="text" class="form-control" value="<?=set_value('symbol', $company->symbol)?>" >

                                </div>
                                <div class="form-group">
                                    <label>Company Name</label>
                                      <input name="com_name" type="text" class="form-control" value="<?=set_value('com_name', $company->com_name);?>" />
                                </div>

                                <!--      <div class="form-group">
                                          <label>Sector</label>
                                          <input name="sectorid" type="text" class="form-control" value="<?=set_value('sectorid', $company->sectorid)?>" >
                                      </div>
                                  -->
                                      <div class="form-group">
                                        <label>Sector</label>
                                        <div class="">
                                          <select class="form-control" name="sectorid">
                                            <option value="">Select</option>
                                            <?php foreach ($com_sectors as $sec){ ?>
                                            <option value="<?=$sec->sectorid;?>"
                                              <?=set_select('sectorid',$sec->sectorid, $sec->sectorid == $company->sectorid ? TRUE : FALSE  ); ?>>
                                              <?=$sec->sec_name;?></option>
                                              <?php  } ?>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label>Listed Board</label>
                                        <div class="">
                                          <select class="form-control" name="boardid">
                                            <option value="">Select</option>
                                            <?php foreach ($list_Board as $brd){ ?>
                                            <option value="<?=$brd->boardid;?>"
                                              <?=set_select('boardid',$brd->boardid, $brd->boardid == $company->boardid ? TRUE : FALSE  ); ?>>
                                              <?=$brd->boardname;?></option>
                                              <?php  } ?>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label>Company Secretary</label>
                                        <div class="">
                                          <select class="form-control" name="secid">
                                            <option value="">Select</option>
                                            <?php foreach ($com_Secretary as $secretary){ ?>
                                            <option value="<?=$secretary->secid;?>"
                                              <?=set_select('secid',$secretary->secid, $secretary->secid == $company->secid ? TRUE : FALSE  ); ?>>
                                              <?=$secretary->secretaryname;?></option>
                                              <?php  } ?>
                                          </select>
                                        </div>
                                      </div>

                                <div class="form-group">
                                    <label>Address 1</label>
                                      <input name="address1" type="text" class="form-control" value="<?=set_value('address1', $company->address1);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Address 2</label>
                                      <input name="address2" type="text" class="form-control" value="<?=set_value('address2', $company->address2);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Address 3</label>
                                      <input name="address3" type="text" class="form-control" value="<?=set_value('address3', $company->address3);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Address 4</label>
                                      <input name="address4" type="text" class="form-control" value="<?=set_value('address4', $company->address4);?>" />
                                </div>

                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input name="tel" type="text" class="form-control" value="<?=set_value('tel', $company->tel)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Fax</label>
                                    <input name="fax" type="text" class="form-control" value="<?=set_value('fax', $company->fax)?>" >
                                </div>

                                <div class="form-group">
                                    <label>E Mail</label>
                                    <input name="email" type="text" class="form-control" value="<?=set_value('email', $company->email)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Web Site</label>
                                    <input name="website" type="text" class="form-control" value="<?=set_value('website', $company->website)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Chairman</label>
                                    <input name="chairman" type="text" class="form-control" value="<?=set_value('chairman', $company->chairman)?>" >
                                </div>

                                <div class="form-group">
                                    <label>CEO</label>
                                    <input name="ceo" type="text" class="form-control" value="<?=set_value('ceo', $company->ceo)?>" >
                                </div>

                                <div class="form-group">
                                    <label>Deputy Chairman</label>
                                    <input name="deputychairman" type="text" class="form-control" value="<?=set_value('deputychairman', $company->deputychairman)?>" >
                                </div>

                              <!--  <p>
                                  <div class="btn-group">
                                    <a class="btn btn-primary" href="#" title="Add Directors"> Add Directors </a>
                                  </div>
                                </p> -->
                                  <!--button type="submit" class="btn btn-primary">Save</button-->
                                  <!--button type=button class="btn btn-primary">Add Directors</button-->


                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Add</button>

                      </form>
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
