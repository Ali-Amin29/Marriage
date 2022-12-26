@extends('DashBoard.Layout.master')
@section('Container.client')

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
            <div class="card-body p-4">
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
        <div class="col-xl-12">
          <div class="card service-content">
            <div class="card-header">
              <h4 class="card-title">الخدمات</h4>
            </div>
            <div class="card-body">
              <ul class="nav nav-pills justify-content-start mb-4">
                <li class=" nav-item">
                  <a href="#navpills2-1" class="nav-link text-muted active" data-toggle="tab"
                    aria-expanded="false">الخدمات</a>
                </li>
                <li class="nav-item">
                  <a href="#navpills2-2" class="nav-link  text-muted" data-toggle="tab"
                    aria-expanded="false">الخدمات</a>
                </li>
                <li class="nav-item">
                  <a href="#navpills2-3" class="nav-link text-muted" data-toggle="tab"
                    aria-expanded="true">الخدمات</a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="navpills2-1" class="tab-pane">
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                  </div>
                </div>
                <div id="navpills2-2" class="tab-pane active">
                  <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                  </div>
                </div>
                <div id="navpills2-3" class="tab-pane">

                  <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="col-xl-4 col-lg-6 col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-center">
                            <div class="profile-photo">
                              <img src="./images/logo.jpeg" width="100" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-4 mb-1">اسم الخدمة</h3>
                            <p class="text-muted">سعر الخدمة</p>
                            <button type="button" class="btn btn-sm btn-primary mb-2" data-toggle="dropdown">اشتراك
                            </button>
                            <div class="d-flex justify-content-around align-items-center">


                              <div class="dropdown custom-dropdown">
                                <button type="button" class="btn btn-sm btn-outline-primary"
                                  data-toggle="dropdown">مدة الخدمة
                                  <i class="fa fa-angle-down ml-3"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">اسبوع</a>
                                  <a class="dropdown-item" href="#">شهر</a>
                                  <a class="dropdown-item" href="#">استخدام مرة واحدة</a>
                                </div>
                              </div>

                              <div class="dropdown custom-dropdown mb-0">
                                <div class="btn sharp btn-primary tp-btn" data-toggle="dropdown">
                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                      <rect x="0" y="0" width="24" height="24"></rect>
                                      <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                      <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                    </g>
                                  </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="javascript:void(0);">تفاصيل الخدمة</a>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>
                    </div>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--**********************************
              Content body end
          ***********************************-->
 @endsection


