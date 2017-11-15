<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>
        <?php $this->load->view('basecss'); ?>


        <style>


            #calendar {
                max-width: 900px;
                margin: 0 auto;
            }

        </style>

    </head>

    <?php
    if ($this->session->userdata('userbean')) {
        $userbean = $this->session->userdata('userbean');
    } else {
        //if invalid session user get redirect to login
        header("Location:" . site_url('Login_Controller/logout'));
    }
    ?>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <div>
                <?php $this->load->view('main_header'); ?>
                <div>
                    <!--/Navigation-->

                    <!-- Page Content -->
                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">Manage Calendar Event</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">



                                <div class="col-lg-6">

                                    <?php
                                    if (isset($msg)) {
                                        echo $msg;
                                    }
                                    ?>

                                    <?php echo form_open('Event_Controller/add', 'class="form-horizontal"'); ?>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="text"  required="" class="form-control datepick" name="eventdate" id="effectdate" ng-model="calHisDate" placeholder="YYYY-MM-DD"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Event</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="description" class="form-control" id="inputPassword3" placeholder="Event Description" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Market Close</label>
                                        <div class="col-sm-10">

                                            <input type="checkbox" name="marketclose"  id="inputPassword3">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Set Event</button>
                                        </div>
                                    </div>
                                    <?php echo form_close(); ?>


                                    <div id='calendar'></div>

                                </div>
                                <div class="col-lg-6">


                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Event Date</th>
                                                    <th>Event</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($eventList != FALSE) {
                                                    foreach ($eventList as $rows) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $rows->eventid; ?></td>
                                                            <td><?php if($rows->marketclose == 'YES'){ ?>
                                                                <button type="button" class="btn btn-danger"><?=$rows->eventdate;?></button>
                                                          <?php  }else { echo $rows->eventdate; } ?></td>
                                                            <td><?=  $rows->description; ?></td>
                                                            <td><a href="<?php echo base_url('Event_Controller/EventRemove/' . $rows->eventid . ''); ?>"> remove </a></td>
                                                        </tr>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>


                            </div>




                            <!-- /.container-fluid -->
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>

                    <script>

                        $(document).ready(function () {

                            $('#calendar').fullCalendar({
                                header: {
                                    left: 'prev,next today',
                                    center: 'title',
                                    right: 'month,basicWeek,basicDay'
                                },
                                defaultDate: '2017-10-12',
                                navLinks: true, // can click day/week names to navigate views
                                editable: true,
                                eventLimit: true, // allow "more" link when too many events
                                events: [
<?php
if ($eventList != FALSE) {
    foreach ($eventList as $rows) {
        ?>

                                            {
                                                title: '<?php echo $rows->description; ?>',
                                                start: '<?php echo $rows->eventdate; ?>'
                                            },
        <?php
    }
}
?>
                                ]
                            });

                        });

                    </script>

                    </body>

                    </html>
