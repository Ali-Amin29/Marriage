@extends('Layout.master')
@section('container.Register')
    <div class="bg-header">
        <div class="container-fluid">
            <div class="row card-Register">
                <div class="col-md-6">
                    <h2 class="text-center mb-5 mt-5">تسجيل عميل </h2>
                    <form class="row flex-column align-items-center" method="POST" action="{{ url('register') }}">
                        @csrf
                        <div class="form-group col-md-8">
                            <label> <strong>رقم الهاتف</strong></label>
                            <input id="phone" type="number" placeholder="ادخل رقم الجوال"
                                class="form-control border border-primary text-primary" @error('phone') is-invalid @enderror
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                        </div>
                        <div class="form-group col-md-8">
                            <label> <strong>كلمة المرور </strong></label>

                            <input id="password" type="password"
                                class="form-control border border-primary text-primary

                                @error('password') is-invalid @enderror"
                                placeholder="ادخل كلمة المرور" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-8">
                            <label> <strong>تأكيد كلمة المرور</strong></label>
                            <input id="password-confirm" placeholder="تأكيد كلمة المرور" type="password"
                                class="form-control border border-primary text-primary" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-primary fw-bold w-100 text-uppercase mb-2" type="submit">
                                تسجيل دخول
                            </button>
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
