@extends('Layout.master')
@section('container.forget-password')


<div class="conformation">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 mb-5">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">


                                <h4 class="mb-4
                                 confirm-code"> انشاء كلمة المرور الجديدة</h4>
                                <h6 class=" mb-4
                                "> أنشئ كلمة مرور قوية وأمنة تحمي حسابك</h4>

                                    <form action="index.html"class="form-valide" method="post">




                                        <div class="form-group">
                                                <label class="col-form-label" for="val-password"><strong>كلمة السر</strong>
                                                </label>
                                                    <input type="password" class="form-control border border-primary" id="val-password" name="val-password" value="9000344555544">
                                            </div>

                                        <div class="form-group">
                                                <label class="col-form-label" for="val-confirm-password">
                                                <strong>تأكيد كلمة السر </strong>
                                                </label>
                                                    <input type="password" class="form-control border border-primary" id="val-confirm-password" name="val-confirm-password" value="9000344555544">
                                            </div>
                                                                                <button type="button" class="btn btn-primary rounded-5"> حفظ كلمة المرور</button>

                                    </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-md-2 col-lg-5 col-md-12 d-none d-lg-block">
                <div class="about-img">
                              <img src="./images/9.png" alt="" />
                </div>
            </div>
        </div>


    </div>
</div>
</div>

@endsection
