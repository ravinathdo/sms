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
                                    <h1 class="page-header">CDS Broker Additional</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-7">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            CDS Accounts
                                        </div>
                                        <div class="panel-body">
                                            <?php 
                                                //echo '<tt><pre>'. var_export($cdsAccList, TRUE).'</pre></tt>';
                                            ?>
                                        </div>
                                    </div>


                                    <!--chart-->

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

                                    


                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        Today
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
                                defaultDate: '2017-10-12',
                                navLinks: true, // can click day/week names to navigate views
                                editable: true,
                                eventLimit: true, // allow "more" link when too many events
                                events: [
                                    {
                                        title: 'All Day Event',
                                        start: '2017-10-01'
                                    },
                                    {
                                        title: 'Long Event',
                                        start: '2017-10-07',
                                        end: '2017-10-10'
                                    },
                                    {
                                        id: 999,
                                        title: 'Repeating Event',
                                        start: '2017-10-09T16:00:00'
                                    },
                                    {
                                        id: 999,
                                        title: 'Repeating Event',
                                        start: '2017-10-16T16:00:00'
                                    },
                                    {
                                        title: 'Conference',
                                        start: '2017-10-11',
                                        end: '2017-10-13'
                                    },
                                    {
                                        title: 'Meeting',
                                        start: '2017-10-12T10:30:00',
                                        end: '2017-10-12T12:30:00'
                                    },
                                    {
                                        title: 'Lunch',
                                        start: '2017-10-12T12:00:00'
                                    },
                                    {
                                        title: 'Meeting',
                                        start: '2017-10-12T14:30:00'
                                    },
                                    {
                                        title: 'Happy Hour',
                                        start: '2017-10-12T17:30:00'
                                    },
                                    {
                                        title: 'Dinner',
                                        start: '2017-10-12T20:00:00'
                                    },
                                    {
                                        title: 'Birthday Party',
                                        start: '2017-10-13T07:00:00'
                                    },
                                    {
                                        title: 'Click for Google',
                                        url: 'http://google.com/',
                                        start: '2017-10-28'
                                    }
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
                                text: 'Browser market shares January, 2015 to May, 2015'
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
                                    name: 'Brands',
                                    colorByPoint: true,
                                    data: [{
                                            name: 'Lanka Securities',
                                            y: 56.33
                                        }, {
                                            name: 'Asia Securities',
                                            y: 24.03,
                                            sliced: true,
                                            selected: true
                                        }, {
                                            name: 'Equity Stock Brokers',
                                            y: 10.38
                                        }, {
                                            name: 'Sampath Stock Brokers',
                                            y: 4.77
                                        }, {
                                            name: 'NDB Stock Broker',
                                            y: 0.91
                                        }]
                                }]
                        });
                    </script>

                    </body>

                    </html>
