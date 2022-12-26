@extends('DashBoard.Layout.master')
@section('Container.coupon')
    <!--**********************************
                    Content body start
                ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Order -->
            @include('DashBoard.Include.add-event')

            <!--**********************************
                            Content body start
                        ***********************************-->
            <div class="container">
                {{--  @include('DashBoard.Include.search-service')  --}}
                <!-- ************************************ -->


                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title"> ادراه كود الخصم</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 text-center">
                                        <thead>
                                            <tr>

                                                <th>اسم الخصم</th>
                                                <th>كود الخصم </th>
                                                <th> نسبة الخصم</th>
                                                <th>مدة الخصم</th>
                                                <th> بداية الكود</th>
                                                <th>نهاية الكود</th>
                                                <th>حالة الخصم</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="alert alert-dismissible">
                                                <td><strong>مكتب علي </strong></td>
                                                <td>عزاب 1</td>
                                                <td>الاسبوع</td>
                                                <td>15 ملف </td>
                                                <td>1443\1\1</td>
                                                <td>1443\1\1</td>
                                                <td>
                                                    <span class="badge light badge-danger">منتهي </span>

                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void(0);" data-placement="top"
                                                            data-toggle="tooltip" data-dismiss="alert" aria-label="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="alert alert-dismissible">
                                                <td><strong>مكتب علي </strong></td>
                                                <td>عزاب 1</td>
                                                <td>الاسبوع</td>
                                                <td>15 ملف </td>
                                                <td>1443\1\1</td>
                                                <td>1443\1\1</td>
                                                <td>
                                                    <span class="badge light badge-danger">منتهي </span>

                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void(0);" data-placement="top"
                                                            data-toggle="tooltip" data-dismiss="alert" aria-label="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr class="alert alert-dismissible">
                                                <td><strong>مكتب علي </strong></td>
                                                <td>عزاب 1</td>
                                                <td>الاسبوع</td>
                                                <td>15 ملف </td>
                                                <td>1443\1\1</td>
                                                <td>1443\1\1</td>

                                                <td>
                                                    <span class="badge light badge-danger">منتهي </span>

                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void(0);" data-placement="top"
                                                            data-toggle="tooltip" data-dismiss="alert" aria-label="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
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
