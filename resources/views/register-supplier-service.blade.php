@extends('Layout.master')
@section('container.register-supplier')
    <!--***********************************
        Content body Start
    ***********************************-->
    <div class="container align-items-center service-register bg-header"">
        <div class=" row">
            <div class="col-xl-12 col-xxl-12  pt-5">
                <div class="card  pt-5">
                    <div class="card-header">
                        <h4 class="card-title"> خطوات التسجيل</h4>
                    </div>
                    <div class="card-body">
                        <div id="smartwizard" class="form-wizard order-create sw sw-theme-default sw-justified">
                            <ul class="nav nav-wizard">
                                <li><a class="nav-link inactive active" href="#wizard_Service">
                                        <span>1</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Time">
                                        <span>2</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Details">
                                        <span>3</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Payment">
                                        <span>4</span>
                                    </a></li>
                            </ul>
                            <div class="tab-content" style="height: 299px;">
                                <div id="wizard_Service" class="tab-pane" role="tabpanel" style="display: block;">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">الاسم*</label>
                                                <input type="text" name="firstName" class="form-control"
                                                    placeholder="سلمي" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">الاسم الأخير*</label>
                                                <input type="text" name="lastName" class="form-control"
                                                    placeholder="أحمد" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">الايميل*</label>
                                                <input type="email" class="form-control" id="inputGroupPrepend2"
                                                    aria-describedby="inputGroupPrepend2" placeholder="example@example.com"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">رقم التليفون*</label>
                                                <input type="text" name="phoneNumber" class="form-control"
                                                    placeholder="(+1)408-657-9007" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-group">
                                                <label class="text-label">من أين أنت؟*</label>
                                                <input type="text" name="place" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Time" class="tab-pane" role="tabpanel" style="display: none;">
                                    <div class="row">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">اسم الشركة*</label>
                                                <input type="text" name="firstName" class="form-control"
                                                    placeholder="أدخل اسم الشركة" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">إيميل الشركة*</label>
                                                <input type="email" class="form-control" id="emial1"
                                                    placeholder="example@example.com" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">رقم تليفون الشركة*</label>
                                                <input type="text" name="phoneNumber" class="form-control"
                                                    placeholder="(+1)408-657-9007" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">الوظيفة*</label>
                                                <input type="text" name="place" class="form-control" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Details" class="tab-pane" role="tabpanel" style="display: none;">
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>الاحد *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input1"
                                                    id="input1">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input2"
                                                    id="input2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>الاحد *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input3"
                                                    id="input3">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input4"
                                                    id="input4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>الاحد *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input5"
                                                    id="input5">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input6"
                                                    id="input6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>الاحد *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input7"
                                                    id="input7">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input8"
                                                    id="input8">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-2">
                                            <h4>الاحد *</h4>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="9.00" type="number" name="input9"
                                                    id="input9">
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 mb-2">
                                            <div class="form-group">
                                                <input class="form-control" value="6.00" type="number" name="input10"
                                                    id="input10">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Payment" class="tab-pane" role="tabpanel" style="display: none;">
                                    <div class="row emial-setup">
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient11" class="mailclinet mailclinet-gmail">
                                                    <input type="radio" name="emailclient" id="mailclient11">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-google-plus" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">انا استخدم الايميل</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient12" class="mailclinet mailclinet-office">
                                                    <input type="radio" name="emailclient" id="mailclient12">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-office" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text"> انا في المكتب</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient13" class="mailclinet mailclinet-drive">
                                                    <input type="radio" name="emailclient" id="mailclient13">
                                                    <span class="mail-icon">
                                                        <i class="mdi mdi-google-drive" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">انا سائق </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label for="mailclient14" class="mailclinet mailclinet-another">
                                                    <input type="radio" name="emailclient" id="mailclient14">
                                                    <span class="mail-icon">
                                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="mail-text">شئ اخر</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="skip-email text-center">
                                                <p>أو إذا كنت تريد تخطي هذه الخطوة تمامًا وإعدادها لاحقا</p>
                                                <a href="javascript:void(0)">تخطي هذه الخطوة </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: left;"><button
                                    class="btn btn-primary sw-btn-prev disabled" type="button">السابق</button><button
                                    class="btn btn-primary sw-btn-next" type="button">التالي</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body End
    ***********************************-->
@endsection
