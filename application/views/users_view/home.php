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
                                    Login time : <?php echo $this->session->userdata('logintime'); ?>
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
                                                        <?php }
                                                    } ?>
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
