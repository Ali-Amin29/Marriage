@extends('DashBoard.Layout.master')
@section('Container.invoice')

<div class="content-body">
    <div class="container-fluid">
        <!-- Add Order -->
       @include('DashBoard.Include.add-event')


    <!--**********************************
        Content body start
    ***********************************-->
    <div class="container">
       @include('DashBoard.Include.search-service')
        <!-- ************************************ -->


        <div class="row">
            <div class="col-12">
                <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">   الفواتير الخاص بي</h4>
                            </div>
                            <div class="card-body">
                     <div class="table-responsive">
                            <table id="example" class="display min-w850 text-center">
                                        <thead>
                                            <tr>
                                                <th>اسم مكتب</th>
                                                <th> مبلغ الاشتراك</th>
                                                <th>اسم خدمة</th>
                                                <th>رقم الحساب</th>
                                                <th>تاريخ بداية خدمة</th>
                                                <th>رابط الفاتورة</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="alert alert-dismissible">
                                                <td><strong> 1 </strong></td>
                                                <td> علي علي</td>
                                                <td><span class="text-primary me-2">SAR</span>15</td>
                                                <td>  البحث الالي</td>
                                                <td><span class="text-primary me-2">SAR</span>15</td>
                                                <td>1443\1\1</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">
                                                        تفاصيل الخدمة</button>
                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void(0);" data-placement="top" data-toggle="tooltip" data-dismiss="alert" aria-label="Close"><i class="fa fa-trash color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                             <tr class="alert alert-dismissible">
                                                <td><strong> 1 </strong></td>
                                                <td> علي علي</td>
                                                <td><span class="text-primary me-2">SAR</span>15</td>
                                                <td>  البحث الالي</td>
                                                <td><span class="text-primary me-2">SAR</span>15</td>
                                                <td>1443\1\1</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">
                                                        تفاصيل الخدمة</button>
                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void(0);" data-placement="top" data-toggle="tooltip" data-dismiss="alert" aria-label="Close"><i class="fa fa-trash color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>

                                             <tr class="alert alert-dismissible">
                                                <td><strong> 1 </strong></td>
                                                <td> علي علي</td>
                                                <td><span class="text-primary me-2">SAR</span>15</td>
                                                <td>  البحث الالي</td>
                                                <td><span class="text-primary me-2">SAR</span>15</td>
                                                <td>1443\1\1</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary">
                                                        تفاصيل الخدمة</button>
                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void(0);" data-placement="top" data-toggle="tooltip" data-dismiss="alert" aria-label="Close"><i class="fa fa-trash color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>
</div>

<!--**********************************
    body end
***********************************-->



@endsection
