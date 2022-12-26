@extends('Layout.master')
@section('container.services')
<!-- show-service area start -->

<div class="container bg-header">
    <h4 class="mb-5 mt-5">تفاصيل الخدمة</h4>
    <!-- row -->
    <div class="row">
        <div class="col-xl-5">
            <form action="index.html">
                <div class="form-group">
                    <label class="mb-3">
                        <strong> اسم الخدمة</strong>
                    </label>
                    <input type="text" class="form-control" readonly value="الباقة الاساسية">
                </div>
            </form>
        </div>
        <div class="row">
            <h5>تفاصيل الخدمة</h5>
<div class="col-xl-12">
            <div class="card">
                <div class="card-body mb-0 ">
                    <p>في هذة الخدمة يتم البحث عن شريك حسب مواصات قريبة من معلوماتك وبناء علي خيار البحث المراد
                        البحث فيها ولكن يوجد ميزه وهي جدول البحث يكون تلقائي في عملية البحث بفترة زمنية يحدده
                        المستخدم للتيم تحديث القائمة البحث بعد قضاء الفتره المحدده من اعادة البحث</p>
                </div>

            </div>
        </div>
</div>


        <div class="col-md-7 col-xxl-12">
            <div class="new-arrival-content position-relative">
                <h4>تقييم الخدمة <a href="ecom-product-detail.html"> (190 مقيم)</a></h4>
                <div class="comment-review star-rating">
                    <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half-empty"></i></li>
                        <li><i class="fa fa-star-half-empty"></i></li>
                    </ul>

                </div>

            </div>
        </div>

        <h4 class="mb-4">شروط وأحكام الخدمة</h3>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">

                        <div class="card-body">
                           <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="table-responsive">
                                                                    <table class="table header-border table-hover verticle-middle text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">الشروط</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="alert alert-dismissible">
                                                                                <th>1</th>
                                                                                <td> 1-تحتفظ معك بحق تعديل أو
                                                                                    تغيير هذة الأحكام والشروط
                                                                                    وما يترتب عليها دون
                                                                                    إخطار مسبق
                                                                                   </td>

                                                                            </tr>

                                                                            <tr class="alert alert-dismissible">
                                                                                <th>2</th>
                                                                                <td>عدم الأدعاء بمنح الخدمات أو
                                                                                    السماح بالوصول اليها لأي شخص
                                                                                    غيرك


                                                                                </td>


                                                                            </tr>


                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                          <div class="col-lg-12">
                                                                <div class="table-responsive">
                                                                    <table class="table header-border table-hover verticle-middle text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">الاحكام</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="alert alert-dismissible">
                                                                                <th>1</th>
                                                                                <td>تقوم مكتب بجمع البيانات
                                                                                    الشخصية والمعلومات الخاصة
                                                                                    بخدمي الخدمة والعملاء

                                                                                    </td>

                                                                            </tr>

                                                                            <tr class="alert alert-dismissible">
                                                                                <th>2</th>
                                                                                <td>عدم إتاحة الخدمات وتأخير
                                                                                    واستئجار وتخصيص وإعادة بيع
                                                                                    أو توزيع أو ترخيص من
                                                                                    الباطن لهذه الخدمات الي اي
                                                                                    طرف ثالث

                                                                                </td>


                                                                            </tr>


                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                        </div>

                    </div>


                </div>

            </div>
<div class="d-flex justify-content-center mb-2 align-items-center">
                        <button
                            class="btn btn-primary fw-bold text-uppercase d-flex justify-content-center mx-2 align-items-center"
                            type="submit">
                            الاشتراك بالخدمة
                        </button>

    </div>
</div>
</div>
<!-- show-service area start -->
@endsection
