@extends('DashBoard.Layout.master')
@section('Container.search-partiner')
<div class="content-body">
    <div class="container-fluid">
        <!-- Add Order -->
        @include('DashBoard.Include.add-event')

            <!--**********************************
                        Main Start
             ***********************************-->
        <div class="profile-item">
            <div class="pageheader bg_img">
                <div class="pageheader__content text-center">
                    <h2>عنوان للموقع</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="/">الصفحة الرئبسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">كل الأعضاء </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- ==========Page Header Section Ends Here========== -->


        <!-- ==========Member page Section Start Here========== -->
        <section class="member-page-section">
         <div class="container">
                <div class="member-filter">
                    <div class="member-filter-inner">
                        <form>
                            <div class="row">
                                <div class="form-group col-lg-3  col-md-6 d-flex flex-column">
                                    <div class="dropdown custom-dropdown ">
                                        <button type="button" class="btn btn-outline-primary w-100  d-flex justify-content-between align-items-center" data-toggle="dropdown" aria-expanded="true">
                                        أنا أكون   <i class="fa fa-angle-down "></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right " x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
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
                                    <button type="button" class="btn btn-outline-primary w-100  d-flex justify-content-between align-items-center" data-toggle="dropdown" aria-expanded="true">
                                    ابحث عن <i class="fa fa-angle-down "></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right " x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
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
                                    <button type="button" class="btn btn-outline-primary w-100  d-flex justify-content-between align-items-center" data-toggle="dropdown" aria-expanded="true">
                                18 <i class="fa fa-angle-down "></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right " x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
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
                                    <button type="button" class="btn btn-outline-primary w-100  d-flex justify-content-between align-items-center" data-toggle="dropdown" aria-expanded="true">
                                        33  <i class="fa fa-angle-down "></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right " x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
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
                                    <button type="button" class="btn btn-outline-primary w-100  d-flex justify-content-between align-items-center" data-toggle="dropdown" aria-expanded="true">
                                        ابحث عن دولتك  <i class="fa fa-angle-down "></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right " x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(80px, -115px, 0px);">
                                        <a class="dropdown-item" href="#"> 170 m
                                        </a>
                                        <a class="dropdown-item" href="#">Last 6
                                            Month</a>
                                        <a class="dropdown-item" href="#">Last 10
                                            Month</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3  d-flex justify-content-end align-items-center ml-5">
                                    <button type="button" class="btn btn-primary w-100">ابحث الأن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="member-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="group-item lab-item">
                                <div class="lab-inner bg-light">
                                    <div class="story__thumb position-relative"><a href="/group-single"><img class="w-100"
                                                src="assets/images/group/01.jpg" alt="Dating Thumb"></a></div>
                                    <div class="lab-content content-group text-center p-4">
                                        <h5> يوضع هنا عنوان افتراضي</h5>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة </p>
                                        <p><i class="fa-solid fa-earth-africa"></i> مجموعة عامة</p>
                                        <ul class="img-stack d-flex">
                                            <li><img src="assets/images/group/group-mem/01.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/02.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/03.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/04.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/05.png" alt="member-img"></li>
                                            <li><img src="assets/images/group/group-mem/06.png" alt="member-img"></li>
                                            <li class="bg-primary">12+</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="paginations">
                        <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                            <li>
                                <a href="#"><i class="icofont-rounded-double-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-rounded-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        </div>
<!--**********************************
        Content body end
    ***********************************-->
</div>
@endsection

