<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SecuritiesLK</title>
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
                        <!--user-->
                        <?php
                        if ($userbean->role == 'user') {
                            ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="btn btn-primary btn-xs"> Login time : <?php echo $this->session->userdata('logintime'); ?> </span>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!--chart-->
                                        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Broker Funds
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-bordered">

                                                    <tbody>
                                                        <?php
                                                        if ($bokerBalanceList != FALSE) {
                                                            foreach ($bokerBalanceList as $rows) {
                                                                ?>
                                                                <tr>
                                                                    <td><?= $rows->name ?></td>
                                                                    <td><?= $rows->balance ?></td>
                                                                    <td><?= $rows->lastupdated ?></td>
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
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <center>
                                                Market Open [weekdays 9:00am to 5:00pm]<br>
                                                <?php
                                                $marketclose = $this->session->userdata('marketclose');
                                                if ($marketclose) {
                                                    echo '<button type="button" class="btn btn-lg btn-danger" >Market Close</button>
';
                                                } else {
                                                    echo '<button type="button" class="btn btn-lg btn-success" >Market Open</button>';
                                                }
                                                ?>

                                            </center><br>
                                        </div>

                                        <div id='calendar'></div>


                                    </div>
                                </div>
                                <!-- /.container-fluid -->
                            </div>
<?php } ?>
                        <!--/user-->



                        <!--admin-->
                        <?php
                        if ($userbean->role == 'admin') {
                            ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="btn btn-primary btn-xs">  Login time : <?php echo $this->session->userdata('logintime'); ?> </span>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!--chart-->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                User Login
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-bordered">

                                                    <tbody>
                                                        <?php
                                                        if ($loginList != FALSE) {
                                                            foreach ($loginList as $rows) {
                                                                ?>
                                                                <tr>
                                                                    <td><?= $rows->username ?></td>
                                                                    <td><?= $rows->IP ?></td>
                                                                    <td><?= $rows->logtime ?></td>
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
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <center>
                                                Market Open [weekdays 9:00am to 5:00pm]<br>
                                                <?php
                                                $marketclose = $this->session->userdata('marketclose');
                                                if ($marketclose) {
                                                    echo '<button type="button" class="btn btn-lg btn-danger" >Market Close</button>
';
                                                } else {
                                                    echo '<button type="button" class="btn btn-lg btn-success" >Market Open</button>';
                                                }
                                                ?>

                                            </center><br>
                                        </div>

                                        <div id='calendar'></div>


                                    </div>
                                </div>
                                <!-- /.container-fluid -->
                            </div>
<?php } ?>
                        <!--/admin-->



                        <!--business_analyst-->
                        <?php
                        if ($userbean->role == 'business_analyst') {
                            ?>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="btn btn-primary btn-xs">  Login time : <?php echo $this->session->userdata('logintime'); ?> </span>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-lg-7">
                                        <!--chart-->
                                        <div id='calendar'></div>

                                    </div>
                                    <div class="col-lg-5">
                                        <div class="row">
                                            <center>
                                                Market Open [weekdays 9:00am to 5:00pm]<br>
                                                <?php
                                                $marketclose = $this->session->userdata('marketclose');
                                                if ($marketclose) {
                                                    echo '<button type="button" class="btn btn-lg btn-danger" >Market Close</button>
';
                                                } else {
                                                    echo '<button type="button" class="btn btn-lg btn-success" >Market Open</button>';
                                                }
                                                ?>

                                            </center><br>
                                        </div>




                                    </div>
                                </div>
                                <!-- /.container-fluid -->
                            </div>
<?php } ?>
                        <!--/business_analyst-->



                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>


                    <?php
                    if ($userbean->role != 'business_analyst') {
                        ?>
                        <script>

                            $(document).ready(function () {

                            $('#calendar').fullCalendar({
                            header: {
                            left: 'prev,next today',
                                    center: 'title',
                                    right: 'month,basicWeek,basicDay'
                            },
                                    //defaultDate: '2017-10-12',
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
                    <?php } ?>

                    <?php
                    if ($userbean->role == 'business_analyst') {
                        ?>
                        <!--fullcalander-->
                        <script>

                            $(document).ready(function() {

                            $('#calendar').fullCalendar({
                            header: {
                            left: 'prev,next today',
                                    center: 'title',
                                    right: 'listDay,listWeek,month'
                            },
                                    // customize the button names,
                                    // otherwise they'd all just say "list"
                                    views: {
                                    listDay: { buttonText: 'list day' },
                                            listWeek: { buttonText: 'list week' }
                                    },
                                    defaultView: 'listWeek',
                                    //defaultDate: '2017-10-12',
                                    navLinks: true, // can click day/week names to navigate views
                                    editable: true,
                                    eventLimit: true, // allow "more" link when too many events
                                    events: [
    <?php
    if ($remindList != FALSE) {
        foreach ($remindList as $rows) {
            ?>

                                            {
                                            title: '<?php echo $rows->reminder; ?>',
                                            start: '<?php echo $rows->rdate; ?> <?php echo $rows->rtime; ?>'
                                            },
            <?php
        }
    }
    ?>
    //				{
    //					title: 'All Day Event',
    //					start: '2017-10-01'
    //				},
    //				{
    //					title: 'Long Event',
    //					start: '2017-10-07',
    //					end: '2017-10-10'
    //				},
    //				{
    //					id: 999,
    //					title: 'Repeating Event',
    //					start: '2017-10-09T16:00:00'
    //				},
    //				{
    //					id: 999,
    //					title: 'Repeating Event',
    //					start: '2017-10-16T16:00:00'
    //				},
    //				{
    //					title: 'Conference',
    //					start: '2017-10-11',
    //					end: '2017-10-13'
    //				},
    //				{
    //					title: 'Meeting',
    //					start: '2017-10-12T10:30:00',
    //					end: '2017-10-12T12:30:00'
    //				},
    //				{
    //					title: 'Lunch',
    //					start: '2017-10-12T12:00:00'
    //				},
    //				{
    //					title: 'Meeting',
    //					start: '2017-10-12T14:30:00'
    //				},
    //				{
    //					title: 'Happy Hour',
    //					start: '2017-10-12T17:30:00'
    //				},
    //				{
    //					title: 'Dinner',
    //					start: '2017-10-12T20:00:00'
    //				},
    //				{
    //					title: 'Birthday Party',
    //					start: '2017-10-13T07:00:00'
    //				},
    //				{
    //					title: 'Click for Google',
    //					url: 'http://google.com/',
    //					start: '2017-10-28'
    //				}
                                                        ]
                                                });
                                                });</script>
<?php } ?>






                    <script>
                        Highcharts.chart('container', {
                        chart: {
                        plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                        },
                                title: {
                                text: 'User market shares as at today '
                                },
                                tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                },
                                plotOptions: {
                                pie: {
                                allowPointSelect: true,
                                        cursor: 'pointer',
                                        dataLabels: {
                                        enabled: true,
                                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                                style: {
                                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                                }
                                        }
                                }
                                },
                                series: [{
                                name: 'Companies',
                                        colorByPoint: true,
                                        data: [
<?php
if ($userSecList != FALSE) {
    foreach ($userSecList as $rows) {
        ?>

                                                {
                                                name: '<?php echo $rows->com_name; ?>',
                                                        y: <?php echo $rows->sumnetamount; ?>
                                                },
        <?php
    }
}
?>
                                        ]
                                }]
                        });
                    </script>

                    </body>

                    </html>
