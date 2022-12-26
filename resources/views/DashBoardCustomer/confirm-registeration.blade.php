@extends('DashBoard.Layout.master')
@section('Container.confirmation')
<!--**********************************
    Content body start
  ***********************************-->
  <div class="content-body">
    <div class="container-fluid">
      <div class="modal fade" id="addOrderModalside">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Event</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label class="text-black font-w500">Event Name</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">Event Date</label>
                  <input type="date" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="text-black font-w500">Description</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary">
                    Create
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">معلوماتي</h4>
            </div>
            <div class="card-body">
              <div class="basic-form">
                <form>
                  <div class="row">
                    <div class="form-group col-sm-12 row justify-content-between">
                      <label class="col-sm-2 col-form-label"><strong>الاسم المستعار</strong></label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control border border-primary" />
                      </div>
                      <div class="col-sm-5">
                        <p>
                          يظهر بالموقع -الرجاء استخدام الأحرف العربية فقط
                        </p>
                      </div>
                    </div>
                    <div class="form-group col-sm-12 row justify-content-between">
                      <label class="col-sm-2 col-form-label">
                        <strong>الاسم الرباعي </strong></label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control border border-primary" />
                      </div>
                      <div class="col-sm-5">
                        <p>يظهر بالموقع</p>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> الجنسية</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong>مكان الأقامة </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong>الأصل </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> المدينة</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong>القبيلة </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> عدد الأطفال ( ان وجد)</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong>الحالة الأجتماعية </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> هل تقبلين بالتعدد</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> العمر</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> المستوى التعليمي</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> طبيعة العمل</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> الحالة الصحية</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> مستوي التدين</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> الجمال</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> لون البشره</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> الوزن</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-sm-6 row justify-content-between align-items-center">
                      <div class="col-sm-4">
                        <label class="col-form-label"><strong> الطول</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-sm-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary rounded-5 w-25">
                      حفظ البيانات
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">معلومات الطرف الأخر</h4>
            </div>
            <div class="card-body">
              <div class="basic-form">
                <form>
                  <div class="row">
                    <div class="form-group col-sm-12 row justify-content-between">
                      <label class="col-sm-2 col-form-label"><strong>الاسم المستعار</strong></label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control border border-primary" />
                      </div>
                      <div class="col-sm-5">
                        <p>
                          يظهر بالموقع -الرجاء استخدام الأحرف العربية فقط
                        </p>
                      </div>
                    </div>
                    <div class="form-group col-sm-12 row justify-content-between">
                      <label class="col-sm-2 col-form-label">
                        <strong>الاسم الرباعي </strong></label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control border border-primary" />
                      </div>
                      <div class="col-sm-5">
                        <p>يظهر بالموقع</p>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> الجنسية</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong>مكان الأقامة </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong>الأصل </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> المدينة</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong>القبيلة </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> عدد الأطفال ( ان وجد)</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong>الحالة الأجتماعية </strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> هل تقبلين بالتعدد</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> العمر</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> المستوى التعليمي</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> طبيعة العمل</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> الحالة الصحية</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> مستوي التدين</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> الجمال</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> لون البشره</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> الوزن</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-6 row justify-content-between align-items-center">
                      <div class="col-lg-4">
                        <label class="col-form-label"><strong> الطول</strong></label>
                      </div>
                      <div class="dropdown custom-dropdown col-lg-8">
                        <button type="button"
                          class="btn btn-outline-primary w-100 d-flex justify-content-between align-items-center"
                          data-toggle="dropdown" aria-expanded="false">
                          --حدد أختيار -- <i class="fa fa-angle-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="
                              position: absolute;
                              will-change: transform;
                              top: 0px;
                              left: 0px;
                              transform: translate3d(134px, 34px, 0px);
                            ">
                          <a class="dropdown-item" href="#">1 </a>
                          <a class="dropdown-item" href="#">2 </a>
                          <a class="dropdown-item" href="#"> 3 </a>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-lg-12 row justify-content-between align-items-center">
                      <div class="form-group col-sm-8">
                        <label class="col-form-label"><strong>
                            اكتب بأختصار مواصفات الزوجة التي تريدة</strong></label>

                        <textarea class="form-control border border-primary" rows="4" w-100 id="comment"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary rounded-5 w-25">
                      حفظ البيانات
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">القسم</h4>
            </div>
            <div class="card-body">
              <div class="form-check form-check-inline mb-2">
                <input type="checkbox" class="form-check-input p-2" value="" />
                <label class="form-check-label">
                  <span class="text-primary"> اقسم بالله العظيم : </span>
                  بأنني جاد في تسجيلي بالموقع وان هدفي الزواج عن طريق هذا
                  الموقع
                </label>
              </div>
              <div class="form-check form-check-inline mb-2">
                <input type="checkbox" class="form-check-input p-2" value="" />
                <label class="form-check-label">
                  <span class="text-primary"> اقسم بالله العظيم : </span>
                  بأنة لا يوجد لدي عضوية اخري في هذا الموقع تخصني شخصيا وان
                  هذة هي العضوية الوحيدة

                </label>
              </div>
              <div class="form-check form-check-inline mb-2">
                <input type="checkbox" class="form-check-input p-2" value="" />
                <label class="form-check-label">
                  <span class="text-primary"> اقسم بالله العظيم : </span>
                  بأنة لا يوجد لدي عضوية اخري في هذا الموقع تخصني شخصيا وان
                  هذة هي العضوية الوحيدة
                </label>
              </div>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mt-3 mb-2">
                  أكمال الملف الشخصي
                </button>
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
