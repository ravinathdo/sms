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
                    <div id="page-wrapper" ng-app="smsApp" ng-controller="smsCtrl" ng-init="initMe()">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">CDS Broker Additional</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-8">

                                    {{10 + 12}}   <span >{{msg}}</span>

                                    <input type="checkbox" ng-model="checked"></label><br/>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Upto 50</th>
                                                <th>Over 50</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($calval != FALSE) {
                                                foreach ($calval as $rows) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?= $rows->transactionname; ?>
                                                        </td>
                                                        <td><input type="text" id="UP_50_<?= $rows->calid; ?>" ng-readonly="checked" ng-bind="{{UP_50_<?= $rows->calid; ?> = <?= $rows->transcostupto50; ?>}}"  ng-model="UP_50_<?= $rows->calid; ?>"    /></td>
                                                        <td><input type="text" ng-bind="{{OV_50_<?= $rows->calid; ?> = <?= $rows->transcostover50; ?>}}" ng-model="OV_50_<?= $rows->calid; ?>"  /></td>
                                                        <td><button type="button" class="btn btn-danger" ng-click="updateCalData(<?= $rows->calid; ?>, '{{UP_50_<?= $rows->calid; ?>}}', '5')" >Update</button><?= $rows->calid; ?>

                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>

                                    </table>


                                </div>
                                <div class="col-lg-4">
                                    6
                                </div>
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /#page-wrapper -->

                    </div>
                    <!-- /#wrapper -->

                    <?php $this->load->view('basejs'); ?>
                    </body>


                    <script>
                                var app = angular.module("smsApp", []);
                        app.controller("smsCtrl", function ($scope, $http) {

                            $scope.UP_50_1 = '1233';
                            $scope.initMe = function () {
                                $scope.msg = "Hello";
                            }

                            $scope.updateCalData = function (calid, up, ov) {
                                alert('kk' + calid);
                                var UP = 0;
                                var OV = 0;
                                switch (calid) {
                                    case 1:
                                        console.log('case 1');
                                        UP = $scope.UP_50_1;
                                        OV = $scope.OV_50_1;
                                        break;
                                    case 2:
                                        console.log('case 2');
                                        UP = $scope.UP_50_2;
                                        OV = $scope.OV_50_2;
                                        break;
                                    case 3:
                                        console.log('case 3');
                                        UP = $scope.UP_50_3;
                                        OV = $scope.OV_50_3;
                                        break;
                                    case 4:
                                        console.log('case 4');
                                        UP = $scope.UP_50_4;
                                        OV = $scope.OV_50_4;
                                        break;
                                    case 5:
                                        console.log('case 5');
                                        UP = $scope.UP_50_5;
                                        OV = $scope.OV_50_5;
                                        break;
                                }


 alert('ready');
                                $http({
                                    url: "<?= base_url('maineditor/updateCalValue'); ?>",
                                    method: "GET",
//                                    params: {cdsacc: $scope.cdsacc}
                                }).then(function (response) {
                                    console.log('res');
                                    console.log(response.data);
                                    $scope.msg = response.data;
                                });

                            }
                            
                            


                            $scope.loadCalHistory = function () {
                                alert('ll');
                            }

                        });


                    </script>



                    </html>
