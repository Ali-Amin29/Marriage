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
                                <li><a class="nav-link inactive" href="#wizard_brief">
                                        <span>4</span>
                                    </a></li>
                                <li><a class="nav-link inactive" href="#wizard_Payment">
                                        <span>5</span>
                                    </a></li>
                            </ul>
                            <div class="tab-content pt-5">
                                <form method="post" action="">
                                    <div id="wizard_Service" class="tab-pane" role="tabpanel" style="display: block;">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">رقم التليفون*</label>
                                                    <input type="number" id="phone" name="phoneNumber"
                                                        class="form-control " placeholder="ادخل الرقم" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <span> سوف يتم ارسال كود علي الهاتف برجاء التأكيد من خلاله</span>
                                            </div>
                                            <div class="col-lg-6 mt-3">
                                                <div class="form-group">
                                                    <label class="text-label"> الرقم السري*</label>
                                                    <input type="Password" id="password" name="password"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mt-3">
                                                <div class="form-group">
                                                    <label class="text-label"> الرقم السري تأكيد*</label>
                                                    <input type="Password" id="confirmPassword" name="confirmPassword"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="wizard_Time" class="tab-pane" role="tabpanel" style="display: none;">
                                        <div class="row">
                                            <div class="conformation" style="padding:0;">
                                                <div class="container">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <div class="authincation-content">
                                                                <div class="row no-gutters">
                                                                    <div class="col-xl-12">
                                                                        <div class="auth-form">
                                                                            <h4
                                                                                class="mb-4
                                                                                 confirm-code">
                                                                                كود تأكيد</h4>
                                                                            <h6
                                                                                class=" mb-4
                                                                                ">
                                                                                تم أرسال كود لتأكيد الحساب علي رقم الهاتف
                                                                                المرفق أدناه
                                                                                لتغيير كلمة المرور الخاصة بك </h4>
                                                                                <div class="form-group">
                                                                                    <div>
                                                                                        <input type="text"
                                                                                            class="form-control border border-warning"
                                                                                            disabled id="val-phoneus"
                                                                                            name="val-phoneus"
                                                                                            value="9000344555544">
                                                                                    </div>
                                                                                </div>


                                                                                <div
                                                                                    class="userInput mt-5 mb-2 d-flex justify-content-evenly gap-2">
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger autofocus otpinput"
                                                                                        autofocus />
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger  otpinput" />
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger otpinput" />
                                                                                    <input type="text" maxlength="1"
                                                                                        class="btn btn-outline-danger otpinput" />
                                                                                </div>
                                                                                <p class="text-dark text-center">ستنتهي
                                                                                    صلاحية الكود بعد <span
                                                                                        class="text-danger"
                                                                                        id="countdown-timer"></span>
                                                                                    <span class="text-danger"
                                                                                        id="resend"></span>
                                                                                </p>
                                                                                <div class="d-flex justify-content-evenly">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary  rounded-5 ">تأكيد
                                                                                        الكود</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-primary  rounded-5 disabled">إعادة
                                                                                        الأرسال</button>
                                                                                </div>

                                                                        </div>

                                                                        <!-- <h4 class="text-center mb-3">Enter OTP</h4>
                                                                                                                                                                                                 <div class="mt-5 mb-2 d-flex justify-content-evenly gap-2 userInput">
                                                                                                                                                                                                                                            <input type="text" maxlength="1" class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                            <input type="text"  maxlength="1"class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                            <input type="text" maxlength="1" class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                            <input type="text" maxlength="1" class="btn btn-outline-danger otpinput" />
                                                                                                                                                                                                                                        </div> -->

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 d-none d-md-block">
                                                            <div class="about-img">
                                                                <img src="./images/img-1.jpeg" alt="" />

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="wizard_Details" class="tab-pane" role="tabpanel" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label"> اسم المكتب *</label>
                                                    <input type="text" id="office" name="officeName"
                                                        class="form-control w-100" placeholder="ادخل اسم المكتب" required>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label"> الاسم رباعي *</label>
                                                    <input type="text" id="supplier" name="supplierName"
                                                        class="form-control w-100" placeholder="ادخل اسم رباعي" required>
                                                </div>
                                                <p>الاسم مخفي فقط للاستخدام الرسمي </p>
                                            </div>
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label"> رقم الهواية *</label>
                                                    <input type="number" id="identity" name="identityNumber"
                                                        class="form-control w-100" placeholder="ادخل رقم الهواية "
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="wizard_brief" class="tab-pane" role="tabpanel" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label"> نبذه عن المكتب*</label>
                                                    <input type="text" id="brief" name="briefContant"
                                                        class="form-control w-100"
                                                        placeholder="ادخل معلومات تفبدنا عن المكتب " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wizard_Payment" class="tab-pane" role="tabpanel" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-12 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">رقم الحساب البنكي*</label>
                                                    <input type="number" id="payment" name="paymentCard"
                                                        class="form-control w-100" placeholder="ادخل الرقم البنكي "
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: left;">
                                    <button class="btn btn-primary sw-btn-prev disabled" type="button"
                                        id="prev">السابق
                                    </button>
                                    <button class="btn btn-primary sw-btn-next" type="button" id="next">التالي
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
