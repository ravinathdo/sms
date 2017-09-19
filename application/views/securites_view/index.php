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
                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">Add Securities</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row" ng-app="smsApp" ng-controller="smsCtrl" ng-init="loadCal()">

                                {{1 + 5}} {{name}}

                                <div class="col-lg-6">


                                    <?php echo form_open('Securities_Controller/add') ?>
                                    <?php echo validation_errors(); ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">CDS Acc</label>
                                        <select name="cdsaccid"  class="form-control" ng-model="cdsacc" >
                                            <option  value="" >--select--</option>
                                            <?php foreach ($CDSAccList as $row) { ?>
                                                <option  value="<?= $row->cdsaccid; ?>"  <?= set_select('cdsaccid', $row->cdsaccid, $row->cdsaccid == $security->cdsaccid ? TRUE : FALSE ); ?>><?= $row->name; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Company</label>
                                        <select name="comid"  class="form-control" ng-model="comid" ng-change="getCompSecSubtype()">
                                            <option  value="" >--select--</option>
                                            <?php foreach ($companyList as $row) { ?>
                                                <option  value="<?= $row->comid; ?>"  <?= set_select('comid', $row->comid, $row->comid == $security->comid ? TRUE : FALSE ); ?>><?= $row->com_name; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sub Type</label>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Subtype</th>
                                                    <th>subtype</th>
                                                    <th>qty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="x in compsubtype">
                                                    <td>{{x.subtypeid}} <input type="radio" name="secsub" value="{{x.subtypeid}}" /></td>
                                                    <td>{{x.subtypename}}</td>
                                                    <td>{{x.subtype}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        {{msg}}
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">qty</label>
                                        <input type="text" name="qty" ng-model="qty" class="form-control"  value="<?= set_value('qty', $security->qty); ?>" ng-blur="getMilionValues()" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Amount</label>
                                        <input type="text" name="amount" ng-model="amount" class="form-control"  value="<?= set_value('qty', $security->qty); ?>" ng-blur="getMilionValues()" >
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                    <?php echo form_close() ?>

                                </div>
                                <div class="col-lg-6">
                                    <input type="text" ng-bind="{{totalamount = qty * amount}}" ng-model="totalamount" />
                                    <h2>Total {{totalamount}}</h2>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Subtype</th>
                                                <th> &lt;=Million</th>
                                                <th></th>
                                                <th>&gt;=Million</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="x in calData">
                                                <td>{{x.transactionname}} </td>
                                                <td>{{x.transcostupto50}}</td>
                                                <td style="color: green">{{x.transcostupto50 * minMilionpart| currency :"Rs ": 2}}</td>
                                                <td>{{x.transcostover50}}</td>
                                                <td style="color: red">{{x.transcostover50 * maxMilionpart| currency :"Rs ": 2}}</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>Total: {{ getMinMilionTotal() | currency :"Rs ": 2}}</td>
                                                <td></td>
                                                <td>Total: {{ getMaxMilionTotal()  }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h2>Subtotal : {{subMinMilion + subMaxMilion | currency :"Rs ": 2}}</h2>
                                    <br>

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
                                $scope.name = "Jhon Doe";
                                        $scope.qty = 0;
                                        $scope.amount = 0;
                                        $scope.totalcal = 0;
                                        $scope.totalamount = 0;
                                        $scope.minMilionpart = 0
                                        $scope.maxMilionpart = 0


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
                                $http({
                                url: "Securities_Controller/getCal/",
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
                                        total += (ca.transcostupto50 * $scope.minMilionpart);
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
                                        total += (ca.transcostover50 * $scope.maxMilionpart);
                                }
//                                angular.forEach($scope.calDataArr, function (value, key) {
//                                    console.log(key + ': ' + value);
//                                });
                                $scope.subMaxMilion = total;
                                        return total;
                                }




                                $scope.getMilionValues = function () {
                                console.log('getMilionValues');
                                        var marginValue = 100;
                                        var ttl = $scope.qty * $scope.amount;
                                        console.log('ttl:' + ttl);
                                        if (ttl <= marginValue) {
                                $scope.minMilionpart = ttl;
                                } else {
                                var noofm = ttl / marginValue;
                                        console.log('ttl / marginvalue :' + noofm);
                                        //get fist part and last part
                                        noofm = parseInt(noofm);
                                        var valFirstPart = noofm * marginValue;
                                        var valLastPart = ttl - valFirstPart;
                                        $scope.minMilionpart = valFirstPart;
                                        $scope.maxMilionpart = valLastPart;
                                }
                                console.log('------------------');
                                        console.log('minMilionpart:' + $scope.minMilionpart);
                                        console.log('maxMilionpart:' + $scope.maxMilionpart);
                                        console.log('------------------');
                                }




                                });
                    </script>

                    </html>
