@extends('Layout.master')
@section('container.index')
    <!-- ================  Hero area Start Here =============== -->
    <div class="hero-area slider-4" id="slider-area">
        <div class="slider">
            <div class="container">
                <div class="row">
                    <div class="offset-md-8 col-md-4">
                        <div class="hero-text mr-ri-l">
                            <h1>ابحث عن شريك العمر</h1>
                            <p>طريقك الأفضل للوصول لنصفك الآخر بسهولة وآمان وخصوصية تامة</p>
                            {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="search" id="search" placeholder="ادخل اسم مزود الخدمة"
                                        class="form-control W-25" onfocus="this.value=''">
                                </div>
                                <div id="search_list"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================  Hero area End Here =============== -->
    <!-- ================ About Section Start Here =============== -->
    <section id="about" class="about-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>عن منصة ميثاق للزواج</h2>
                        <p>
                            هي منصة إلكترونية توفر العديد من المزايا والأدوات المتطورة والتي
                            تساعد الباحثين عن الزواج للوصول لنصفهم الآخر بمنتهي الدقة
                            والسهولة والسرعة من خلال اضافة بياناتهم الشخصية والتي يتم
                            التعامل معها بمنتهي السرية ومرعات الخصوصية
                        </p>
                        <a href="#" class="hero-btn">ابحث عن شريك حياتك</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <img src="./images/about.jpeg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ About Section Start Here =============== -->
    <!-- ================ Feature Section Start Here =============== -->
    <section id="features" class="feature-area gray-bg pt-128 pb-70">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="section-heading pb-55 text-center">
                        <h2>مميزات منصة ميثاق</h2>
                    </div>
                </div>
            </div>
            <div class="row feature-area-gap">
                <div class="col-lg-4 col-md-6 ">
                    <div class="awesome-feature  text-center h-100">
                        <div class="awesome-feature-icon">
                            <span><i class="icofont icofont-light-bulb"></i></span>
                        </div>
                        <div class="awesome-feature-details">
                            <h5>شركة سعودية</h5>
                            <p>
                                ميثاق شركة سعودية عربية تعمل علي التوفيق بين الأزواج ومساعدتهم
                                في البحث عن نصفهم اللآخر بأفضل الطرق الأمنة،فنحن نقدم لك خدمة
                                بحث متطورة تسهل عليك ايجاد نصفك الآخر بالمواصفات التي تريدها
                                في أسرع وقت وبجودة عالية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="awesome-feature  text-center h-100">
                        <div class="awesome-feature-icon">
                            <span><i class="icofont icofont-light-bulb"></i></span>
                        </div>
                        <div class="awesome-feature-details">
                            <h5>معروف</h5>
                            <p>
                                منصة ميثاق مشترك مع معروف والتي تتيح الأطلاع علي تقييمات
                                العملاء السابقين للمنصة وبما ان منصة ميثاق مشترك مع معروف فهذا
                                يوفر الثقة الشديدة لدي العملاء للعملاء للحصول علي معلومات
                                متاجر الكترونية كما توفر تقييم العملاء السابقين في المنصة
                                وبذلك يمكن الأطلاع علي تجارتهم مع المتاجر.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="awesome-feature  text-center h-100">
                        <div class="awesome-feature-icon">
                            <span><i class="icofont icofont-code"></i></span>
                        </div>
                        <div class="awesome-feature-details">
                            <h5>النطاق السعودي</h5>
                            <p>
                                تم الحصول علي نطاق سعودي والذي يعتبر دلالة واضحة علي ان منصة
                                ميثاق ترجع الملكية شركة سعودية تمتلك سجل تجاري موثق.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6  ">
                    <div class="awesome-feature  text-center h-100">
                        <div class="awesome-feature-icon">
                            <span><i class="icofont icofont-light-bulb"></i></span>
                        </div>
                        <div class="awesome-feature-details">
                            <h5>المصداقية</h5>
                            <p>
                                موقع موثق لجميع الوسطاء يرجع لمصداقة مزودي الخدمة (الوسطاء )
                                الموجودين داخل المنصة والتأكد من معلوماتهم وبياناتهم الحقيقية
                                من خلال اظهار أوراق رسمية
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="awesome-feature text-center h-100">
                        <div class="awesome-feature-icon">
                            <span><i class="icofont icofont-light-bulb"></i></span>
                        </div>
                        <div class="awesome-feature-details">
                            <h5>الخصوصية</h5>
                            <p>
                                في ميثاق يتم حجب البيانات الخاصة بالعملاء عن مزودي الخدمة
                                وتمكنهم من التواصل مع النصف الأخر بدون اظهار رقم خاص بهم وبدون
                                بيانات حقيقية ،لتمكنهم من الحصول علي الخصوصية الكاملة.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="awesome-feature text-center h-100">
                        <div class="awesome-feature-icon">
                            <span><i class="icofont icofont-code"></i></span>
                        </div>
                        <div class="awesome-feature-details">
                            <h5>التواصل</h5>
                            <p>
                                يوجد العديد من الطرق الغير صحيحة والتي تعرضك لعمليات النصب
                                والاحتيال خلال رحلت البحث عن نصفك الآخر ، منصة ميثاق لتحميك من
                                الوقوع بعمليات النصب والاحتيال بأذن اللة.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Feature Section End Here =============== -->
    <!-- ================ Brokers Section Start Here =============== -->
    <section id="brokers" class="team-area ptb-130 ">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="section-heading pb-55 text-center">
                        <h2> الوسطاء</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker3.png"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>الجمعية الخيرية لتيسير الزواج ورعاية الأسرة</h5>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker1.png"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>جمعيو زواج التنموية بمنطقة البارحة</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker2.png"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>جمعية الزواج والتنمية الأسرية بالطائف</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker5.png"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>جمعية توفيق الأهلية بمكة المكرمة</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker7.jpg"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>جمعية زواج الخيرية للزواج والتنمية الأسرية بالبكيرية</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker4.png"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>جمعية توافق </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <div class="team-single h-100">
                        <img src="./images/broker6.png"class="img-fluid" alt="" />
                        <div class="team-overlay text-center">
                            <h5>جمعية العفاف للوفيق بين الراغبين في الزواج</h5>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- ================ Brokers Section Start Here =============== -->

    <!-- ================ Stats Section Start Here =============== -->
    <section id="stats" class="about-section padding-tb bg-img">
        <div class="container">
            <div class="section-header text-center">
                <h4>الاحصائيات</h4>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="lab-item about-item h-100">
                            <div class="lab-inner text-center h-100">
                                <div class="lab-thumb">
                                    <img src="../images/04.png" alt="img" />
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,991</h2>
                                    <p>عدد النساء المسجلات</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="lab-item about-item h-100">
                            <div class="lab-inner text-center h-100">
                                <div class="lab-thumb">
                                    <img src="../images/03.png" alt="img" />
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">28,960</h2>
                                    <p>عدد الرجال المسجلين</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="lab-item about-item h-100">
                            <div class="lab-inner text-center h-100">
                                <div class="lab-thumb">
                                    <img src="../images/01.png" alt="img" />
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,960</h2>
                                    <p>حالات الزواج التي تمت عن طريق المنصة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="lab-item about-item h-100">
                            <div class="lab-inner text-center h-100">
                                <div class="lab-thumb">
                                    <img src="../images/02.png" alt="img" />
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,960</h2>
                                    <p>عدد الوسطاء</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Stats Section End Here =============== -->
@endsection
