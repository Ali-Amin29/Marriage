@extends('DashBoard.Layout.master')
@section('Container.supplier')

<!--**********************************
    Content body start
***********************************-->
      <div class="content-body">
          <div class="container-fluid">
            <!-- Add Order -->
            @include('DashBoard.Include.add-event')

                         <div class="row">
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-danger">
                          <div class="card-body  p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-calendar-1"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">الموعد</p>
                                      <h3 class="text-white">76</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-success">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-diamond"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">الأرباح</p>
                                      <h3 class="text-white">$56K</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-info">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-heart"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">إجمالي المرضي</p>
                                      <h3 class="text-white">783K</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-primary">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-user-7"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">رئيس الطهاه</p>
                                      <h3 class="text-white">$76</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                   <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-info">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-heart"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">إجمالي المرضي</p>
                                      <h3 class="text-white">783K</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-primary">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-user-7"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">رئيس الطهاه</p>
                                      <h3 class="text-white">$76</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-info">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-heart"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">إجمالي المرضي</p>
                                      <h3 class="text-white">783K</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-sm-6">
                      <div class="widget-stat card bg-primary">
                          <div class="card-body p-4">
                              <div class="media">
                                  <span class="mr-3">
                                      <i class="flaticon-381-user-7"></i>
                                  </span>
                                  <div class="media-body text-white text-right">
                                      <p class="mb-1">رئيس الطهاه</p>
                                      <h3 class="text-white">$76</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--**********************************
                                Table End
                  ***********************************-->
                  <div class="col-12">
                      <div class="card">

                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="example" class="display min-w850 text-center">
                                      <thead>
                                          <tr>
                                              <th>الأسم</th>
                                              <th>الوظيفة</th>
                                              <th>المكتب</th>
                                              <th>العمر</th>
                                              <th>الحالة </th>
                                              <th>التاريخ</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

 <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>




                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>




                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>




                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>



                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>


                                             <tr>
                                              <td>محمد</td>
                                              <td>محاسب</td>
                                              <td>المكتب1</td>
                                              <td>61</td>
                                              <td><span class="badge light badge-success">مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

                                          <tr>
                                              <td>أحمد</td>
                                              <td>محامي</td>
                                              <td>المكتب2</td>
                                              <td>66</td>
                                              <td><span class="badge light badge-success"> مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>أحمد</td>
                                              <td>محامي</td>
                                              <td>المكتب2</td>
                                              <td>66</td>
                                              <td><span class="badge light badge-danger">غير مدفوع</span></td>
                                              <td>2010/03/11</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>بسملة</td>
                                              <td>دكتوره</td>
                                              <td>مستشفي 1</td>
                                              <td>33</td>
                                              <td><span class="badge light badge-danger">غير مدفوع</span></td>
                                              <td>2011/06/07</td>
                                              <td>
                                                  <div class="dropdown">
                                                      <button type="button" class="btn btn-danger light sharp" data-toggle="dropdown">
                                                          <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                  <rect x="0" y="0" width="24" height="24"></rect>
                                                                  <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                  <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                              </g>
                                                          </svg>
                                                      </button>
                                                      <div class="dropdown-menu">
                                                          <a class="dropdown-item" href="#">Edit</a>
                                                          <a class="dropdown-item" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </td>
                                          </tr>

                                      </tbody>

                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--**********************************
                           Person Start
                   ***********************************-->
                  <div class="col-md-4 ">
                      <div class="card overflow-hidden">
                          <div class="text-center p-3 overlay-box "
                              style="background-image: url(images/big/img1.jpg);">
                              <div class="profile-photo">
                                  <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle"
                                      alt="">
                              </div>
                              <h3 class="mt-3 mb-1 text-white">مريم</h3>
                              <p class="text-white mb-0">مصممه ديكور</p>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between"><span
                                      class="mb-0">النوع</span> <strong class="text-muted">أنثي </strong></li>
                              <li class="list-group-item d-flex justify-content-between"><span
                                      class="mb-0">العمر</span> <strong class="text-muted">العمر: 24 </strong></li>
                          </ul>
                          <div class="card-footer border-0 mt-0">
                              <button class="btn btn-primary btn-lg btn-block">
                                  <i class="fa fa-bell-o"></i> تذكير
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="card overflow-hidden">
                          <div class="text-center p-3 overlay-box "
                              style="background-image: url(images/big/img1.jpg);">
                              <div class="profile-photo">
                                  <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle"
                                      alt="">
                              </div>
                              <h3 class="mt-3 mb-1 text-white">مريم</h3>
                              <p class="text-white mb-0">مصممه ديكور</p>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between"><span
                                      class="mb-0">النوع</span> <strong class="text-muted">أنثي </strong></li>
                              <li class="list-group-item d-flex justify-content-between"><span
                                      class="mb-0">العمر</span> <strong class="text-muted">العمر: 24 </strong></li>
                          </ul>
                          <div class="card-footer border-0 mt-0">
                              <button class="btn btn-primary btn-lg btn-block">
                                  <i class="fa fa-bell-o"></i> تذكير
                              </button>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="card overflow-hidden">
                          <div class="text-center p-3 overlay-box "
                              style="background-image: url(images/big/img1.jpg);">
                              <div class="profile-photo">
                                  <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle"
                                      alt="">
                              </div>
                              <h3 class="mt-3 mb-1 text-white">مريم</h3>
                              <p class="text-white mb-0">مصممه ديكور</p>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between"><span
                                      class="mb-0">النوع</span> <strong class="text-muted">أنثي </strong></li>
                              <li class="list-group-item d-flex justify-content-between"><span
                                      class="mb-0">العمر</span> <strong class="text-muted">العمر: 24 </strong></li>
                          </ul>
                          <div class="card-footer border-0 mt-0">
                              <button class="btn btn-primary btn-lg btn-block">
                                  <i class="fa fa-bell-o"></i> تذكير
                              </button>
                          </div>
                      </div>
                  </div>
                  <!--**********************************
                               Person End
                  ***********************************-->
              </div>
          </div>
      </div>
      <!--**********************************
              Content body end
          ***********************************-->
@endsection
