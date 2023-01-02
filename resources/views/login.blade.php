@extends('Layout.master')
@section('container.Login')
    <div class="bg-header">
        <div class="container-fluid">
            <div class="row card-login ">
                <div class="col-md-6">
                    <h2 class="text-center mb-5 mt-5">تسجيل الدخول</h2>
                    <form class="row flex-column align-items-center" method="get" action="{{ url('check') }}">
                        <div class="form-group col-md-8">
                            <label> <strong>رقم الهاتف</strong></label>
                            <input type="tel" id="phone" class="form-control  border border-primary text-primary"
                                id="floatingInputEmail" name="number" placeholder="ادخل رقم الهاتف" />
                        </div>
                        <div class="form-group col-md-8">
                            <label> <strong>كلمة المرور </strong></label>

                            <input type="password" class="form-control border border-primary text-primary"
                                id="floatingInputEmail" name="password" placeholder="ادخل كلمة المرور " />
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary fw-bold w-100 text-uppercase mb-2" type="submit">
                                تسجيل دخول
                            </button>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="line"></div>
                            <small class="or text-center">Or</small>
                            <div class="line"></div>
                        </div>
                        <div class="row flex-column align-items-center">
                            <a class="text-center mb-5 small" href="{{ route('supplier-register') }}">هل انت مزود خدمة ؟
                                سجل من هنا</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 card-img-left  d-none d-md-block">
                    <img src="./images/login.jpeg" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!-- Authincation area Start -->
@endsection
