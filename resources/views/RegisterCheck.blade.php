@extends('Layout.master')
@section('container.ServiceProvideRegister')
    <!-- row -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="./images/05.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12" style="text-align: center">
                                <div class="new-arrival-content position-relative">
                                    <h4>مزود خدمة</h4>
                                    <button class="btn btn-primary">
                                        <a href="{{ route('ServiceRegister') }}" style="color: white">تسجيل الدخول</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-b-30">
                            <div class="col-md-5 col-xxl-12">
                                <div class="new-arrival-product mb-4 mb-xxl-4 mb-md-0">
                                    <div class="new-arrivals-img-contnent">
                                        <img class="img-fluid" src="./images/05.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-xxl-12" style="text-align: center">
                                <div class="new-arrival-content position-relative">
                                    <h4>عميل</h4>
                                    <button class="btn btn-primary">
                                        <a href="{{ route('register') }}" style="color: white">تسجيل الدخول</a>

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
