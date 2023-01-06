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

                                              <div class="dropdown-menu dropdown-menu-right "
                                                  style="position: absolute; will-change:
                                                  transform; top: 0px; left: 0px; transform:
                                                  translate3d(80px, -115px, 0px);">
                                                  {{-- @foreach ($offices as $office)
                                                      <a class="dropdown-item" href="#">
                                                          {{ $office->rate }}
                                                      </a>
                                                  @endforeach --}}


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
                                                  @foreach ($services as $serve)
                                                      <a class="dropdown-item" href="#">
                                                          {{ $serve->subscriptionNumber }}
                                                      </a>
                                                  @endforeach

                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                          <div class="dropdown custom-dropdown ">
                                              <button type="button"
                                                  class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                                                  data-toggle="dropdown" aria-expanded="true">
                                                  عدد حالات الزواج <i class="fa fa-angle-down "></i>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-right " x-placement="top-end"
                                                  style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">

                                                  @foreach ($services as $serve)
                                                      <a class="dropdown-item" href="#">
                                                          {{ $serve->name }}
                                                      </a>
                                                  @endforeach


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

                                          {{-- <h4 class="card-title">خدمات المكاتب التعارف</h4> --}}
                                          <div class="card-body">
                                              <div class="table-responsive">
                                                  <table id="example" class="display min-w850 text-center">
                                                      <thead>
                                                          <tr>
                                                              <th>اسم المكتب</th>
                                                              <th>عدد حالات الزواج</th>
                                                              <th>تقيم مكتب</th>
                                                              <th>عدد المشتركين</th>

                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          {{-- @foreach ($offices as $offic) --}}
                                                          <tr>

                                                              <td><strong>
                                                                      {{-- {{ $offic->officeName }} --}}
                                                                  </strong>

                                                              </td>


                                                              <td>
                                                                  <span>star</span>
                                                              </td>



                                                              <td>
                                                                  <div class="d-flex align-items-center"><i
                                                                          class="fa fa-star"></i> <span class="w-space-no">


                                                                          {{-- {{ $offic->rate }} --}}


                                                                      </span></div>
                                                              </td>


                                                              <td>
                                                                  {{-- {{ $offic->cities->city }} --}}

                                                              <td>

                                                                  <button class="btn btn-primary">عرض البيانات
                                                                  </button>
                                                              </td>

                                                          </tr>
                                                          {{-- @endforeach --}}
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
  </script>

  <script>
      $(".dropdown-menu a ").click(function() {
          let x = $(this).text();
          alert(x);
      });
  </script>
