  @extends('Layout.master')
  @section('container.search')
      {{-- content section start --}}
      <div class="bg-header">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12 mt-5">
                      <div class="card">
                          <div class="card-header border-0 pb-0">
                              <h5 class="card-title"> البحث عن مزود الخدمة</h5>
                          </div>
                          <div class="card-body">
                              <form action="{{ url('search') }}" method="GET" role="search">
                                  <div class="row">
                                      <div class="form-group col-lg-3">
                                          <label> <strong>اسم المكتب</strong></label>
                                          <input type="search" name="search" value=""
                                              class="form-control border border-primary" placeholder="">
                                      </div>

                                  </div>
                                  <div class="row">
                                      <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                          <div class="dropdown custom-dropdown ">
                                              <button type="button"
                                                  class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                  data-toggle="dropdown" aria-expanded="true">
                                                  التقييم <i class="fa fa-angle-down "></i>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-right " x-placement="top-end"
                                                  style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
                                                  <a class="dropdown-item" href="#"> 170 m
                                                  </a>
                                                  <a class="dropdown-item" href="#">Last 6
                                                      Month</a>
                                                  <a class="dropdown-item" href="#">Last 10
                                                      Month</a>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                          <div class="dropdown custom-dropdown ">
                                              <button type="button"
                                                  class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                  data-toggle="dropdown" aria-expanded="true">
                                                  عدد المشتركين <i class="fa fa-angle-down "></i>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-right " x-placement="top-end"
                                                  style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
                                                  <a class="dropdown-item" href="#"> 170 m
                                                  </a>
                                                  <a class="dropdown-item" href="#">Last 6
                                                      Month</a>
                                                  <a class="dropdown-item" href="#">Last 10
                                                      Month</a>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                          <div class="dropdown custom-dropdown ">
                                              <button type="button"
                                                  class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                  data-toggle="dropdown" aria-expanded="true">
                                                  عدد الخدمات <i class="fa fa-angle-down "></i>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-right " x-placement="top-end"
                                                  style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
                                                  <a class="dropdown-item" href="#"> 170 m
                                                  </a>
                                                  <a class="dropdown-item" href="#">Last 6
                                                      Month</a>
                                                  <a class="dropdown-item" href="#">Last 10
                                                      Month</a>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <button type="submit" class="btn btn-primary"> البحث</button>

                              </form>
                          </div>

                          <!-- ********************************************** -->
                          <div class="search-result">
                              <div class="container">
                                  <!-- <div class="d-flex justify-content-start mb-3"> -->

                                  <h2 class="mb-3">نتائج البحث</h2>
                                  <!-- <span class="search-icon ms-2"><i class="fa fa-filter" aria-hidden="true"></i>
                                                                </span>
                                                                <span class="search-icon"><i class="fa fa-sort"></i>
                                                                </span>
                                                            </div> -->

                                  <div class="row">
                                      <div class="col-lg-12">

                                          <h4 class="card-title">خدمات المكاتب التعارف</h4>
                                          <div class="card-body">








                                              <div class="table-responsive">
                                                  <table id="example" class="display min-w850 text-center">
                                                      <thead>
                                                          <tr>
                                                              <th>اسم المكتب</th>
                                                              <th>عدد خدمات المقدمة</th>
                                                              <th>تقيم مكتب</th>
                                                              <th>المنطقة</th>
                                                              <th>البيانات مكتب</th>

                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          @foreach ($provider as $provid)
                                                              <tr>


                                                                  <td><strong>{{ $provid->name }}</strong></td>
                                                                  <td>25 خدمة</td>
                                                                  <td>
                                                                      <div class="d-flex align-items-center"><i
                                                                              class="fa fa-star"></i> <span
                                                                              class="w-space-no">
                                                                              4.5</span></div>
                                                                  </td>
                                                                  <td>الرياض</td>
                                                                  <td>

                                                                      <button class="btn btn-primary">عرض البيانات
                                                                      </button>
                                                                  </td>

                                                              </tr>
                                                          @endforeach
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
              </div>
          </div>
      </div>
  @endsection
  <!-- show-service area start -->
