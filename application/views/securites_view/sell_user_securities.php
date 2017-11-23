<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SMS</title>
        <?php $this->load->view('basecss'); ?>





        <style type="text/css">
            #ex1Slider .slider-selection {
                background: #BABABA;
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
                                    <h1 class="page-header">Sell Securities</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row" ng-app="smsApp" ng-controller="smsCtrl" ng-init="loadCal()">



                                <?php echo form_open('Securities_Controller/sellUserSecurities') ?>

                                <div class="col-lg-6">


                                    <?php echo validation_errors(); ?>

                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Effect Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control datepick" name="effectdate" id="effectdate" ng-model="calHisDate" placeholder="YYYY-MM-DD"/>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary"  ng-click="loadCalHistory()" >GET</button>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $security->com_name ?>">
                                        <input type="hidden" name="comid" value="<?= $security->comid ?>" />
                                    </div>

                                    <!--                         <div class="form-group">
                                                                <label for="exampleInputPassword1">Company</label>
                                                                Company
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputPassword1">Sub Type</label>
                                                                Sub Type
                                                            </div>-->
                                    <div class="form-group">
                                        <input type="hidden" name="secid" value="<?= $security->secid ?>" />
                                        <input type="hidden" name="maxqty" value="<?= $security->qty ?>" />
                                        <label for="exampleInputPassword1">Selling Quantity (Max <?= $security->qty ?>) </label>

                                        <input id="ex1" ng-blur="getMilionValues()" ng-change="getMilionValues()" name="qty" ng-model="qty" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="<?= $security->qty ?>" data-slider-step="1" data-slider-value="0"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Price</label>
                                        <input type="text" name="amount" ng-model="amount" class="form-control"  value="<?= $security->amount ?>" ng-blur="getMilionValues()" ng-keyup="getMilionValues()" >
                                        <input type="hidden" name="cost_per_share" value="<?= $security->cost_per_share?>" />
                                        <input type="hidden" name="cdsaccid" value="<?= $security->cdsaccid?>" />

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <input type="hidden" ng-bind="{{totalamount = qty * amount}}" ng-model="totalamount"  />

                                    <div class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputAmount">Total Amount :</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">Total</div>
                                                <input type="text" readonly="" class="form-control" name="total" placeholder="Total Amount" value="{{totalamount}}">
                                            </div>
                                        </div>
                                    </div>

                                    <br />

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Subtype</th>
                                                <th> &lt;=<?= $MARGIN_VALUE; ?></th>
                                                <th></th>
                                                <th>&gt;=<?= $MARGIN_VALUE; ?></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="x in calData">
                                                <td>{{x.transactionname}}</td>
                                                <td>{{x.transcostupto50}} <input type="hidden" name="UPTO_{{x.calid}}"  value="{{x.transcostupto50}}"/> </td>
                                                <td style="color: green">{{(x.transcostupto50 / 100) * minMilionpart  | currency :"Rs ": 2}}</td>
                                                <td>{{x.transcostover50}} <input type="hidden" name="OVER_{{x.calid}}"  value="{{x.transcostover50}}"/></td>
                                                <td style="color: red">{{(x.transcostover50 * maxMilionpart / 100)  | currency :"Rs ": 2}}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Total: {{ getMinMilionTotal() | currency :"Rs ": 2}}</td>
                                                <td></td>
                                                <td>Total: {{ getMaxMilionTotal() | currency :"Rs ": 2}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <input type="hidden" value="{{totalamount - subMinMilion - subMaxMilion}}" name="netamount"/>

                                    <h2>Net Amount : {{totalamount - subMinMilion - subMaxMilion| currency :"Rs ": 2}}</h2>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                                <?php echo form_close() ?>
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
                        $scope.name = "Jhon Doe";
                        $scope.qty = <?= $security->qty ?>;
                        $scope.amount = <?= $security->amount ?>;
                        $scope.totalcal = 0;
                        $scope.totalamount = 0;
                        $scope.marginValue = <?= $MARGIN_VALUE; ?>;
                        $scope.subMinMilion = 0;
                        $scope.subMaxMilion = 0;
                        var calDataArr = []; // cal data holding array with calculated values


                        $scope.getCompSecSubtype = function () {
                        console.log('kk');
                        console.log($scope.comid);
                        //clear data

                        //make http request
                        $http({
                        url: "Securities_Controller/getCompSecSubtype/" + $scope.comid,
                                method: "GET",
//                                    params: {cdsacc: $scope.cdsacc}
                        }).then(function (response) {
                        console.log('res');
                        if (!response.data) {
                        $scope.msg = "Subtype not found";
                        }
                        console.log(response.data);
                        $scope.compsubtype = response.data;
                        });
                        }




                        $scope.loadCal = function () {
                        console.log('calling loadcal');
                        $http({
//                        url: "Securities_Controller/getCal/",
                        url: "<?php echo site_url('Securities_Controller/getCal/') ?>",
                                method: "GET",
                        }).then(function (response) {
                        console.log('res');
                        console.log(response.data);
                        $scope.calData = response.data;
                        //data filling into object
                        angular.forEach($scope.calData, function (item) {
                        calDataArr.push({
                        "calid": item.calid,
                                "transactionname": item.transactionname,
                                "transcostupto50": item.transcostupto50,
                                "transcostover50": item.transcostover50,
                                "units": item.units
                        });
                        });
                        //modified object fill into scope
                        console.log(calDataArr);
                        $scope.calDataArr = calDataArr;
                        getMilionValues();
                        });
                        }




                        $scope.loadCalHistory = function () {
                        console.log('>loadCalHistory:' + $scope.calHisDate);
                        $http({
                        url: "<?php echo site_url('Securities_Controller/getCalHistory/') ?>" + "/" + $scope.calHisDate,
                                method: "GET",
                        }).then(function (response) {
                        console.log('res');
                        console.log(response.data);
                        $scope.calData = response.data;
                        //data filling into object
                        angular.forEach($scope.calData, function (item) {
                        calDataArr.push({
                        "calid": item.calid,
                                "transactionname": item.transactionname,
                                "transcostupto50": item.transcostupto50,
                                "transcostover50": item.transcostover50,
                                "units": item.units
                        });
                        });
                        //modified object fill into scope
                        $scope.calDataArr = calDataArr;
                        });
                        }




                        $scope.getMinMilionTotal = function () {
                        var total = 0;
                        for (var i = 0; i < $scope.calDataArr.length; i++) {
                        var ca = $scope.calDataArr[i];
                        total += (ca.transcostupto50 * $scope.minMilionpart) / 100;
                        }

//                                angular.forEach($scope.calDataArr, function (value, key) {
//                                    console.log(key + ': ' + value);
//                                });
                        $scope.subMinMilion = total;
                        return total;
                        }

                        $scope.getMaxMilionTotal = function () {
                        var total = 0;
                        for (var i = 0; i < $scope.calDataArr.length; i++) {
                        var ca = $scope.calDataArr[i];
                        total += (ca.transcostover50 * $scope.maxMilionpart) / 100;
                        }
//                                angular.forEach($scope.calDataArr, function (value, key) {
//                                    console.log(key + ': ' + value);
//                                });
                        $scope.subMaxMilion = total;
                        return total;
                        }




                        $scope.getMilionValues = function () {
                        $scope.minMilionpart = 0;
                        $scope.maxMilionpart = 0;
                        console.log('getMilionValues');
                        //$scope.marginValue = 100
                        var ttl = $scope.qty * $scope.amount;
                        console.log('ttl:' + ttl);
                        if (ttl <= $scope.marginValue) {
                        $scope.minMilionpart = ttl;
                        } else {
                        var noofm = ttl - $scope.marginValue;
                        console.log('ttl - marginvalue :' + noofm);
                        //get fist part and last part

//                                        noofm = parseInt(noofm);
//                                        var valFirstPart = noofm * marginValue;
//                                        var valLastPart = ttl - valFirstPart;

                        $scope.minMilionpart = $scope.marginValue;
                        $scope.maxMilionpart = noofm;
                        }
                        console.log('------------------');
                        console.log('minMilionpart:' + $scope.minMilionpart);
                        console.log('maxMilionpart:' + $scope.maxMilionpart);
                        console.log('------------------');
                        }




                        });
                    </script>


                    <script>
                        $('#ex1').slider({
                        formatter: function(value) {
                        return 'Current value: ' + value;
                        }
                        });
                    </script>

                    </html>
