@extends('Layout.master')
@section('container.Register')
    <!-- ================ Register Section Start Here =============== -->
    <div class="bg-header">
        <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".5s"
            style="
      visibility: visible;
      animation-duration: 1.5s;
      animation-delay: 0.5s;
      background-image: url('./images/bg-2.jpg');
                ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 bg-light p-5">
                        <div class="banner__form">
                            <form action="#">
                                <div class="banner__list">
                                    <label> انا اكون</label>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="male">
                                                <input type="radio" id="male" name="me" class="male"
                                                    checked="" />
                                                <span>ذكر</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-mars"></i></span>
                                            </label>
                                        </div>
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="female">
                                                <input type="radio" id="female" name="me" class="female" />
                                                <span>انثي</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-venus"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__list">
                                    <label>ابحث عن</label>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="male2">
                                                <input type="radio" id="male2" name="me2" class="male" />
                                                <span>ذكر</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-mars"></i></span>
                                            </label>
                                        </div>
                                        <div class="col-6 ">
                                            <label class="banner__inputlist" for="female2">
                                                <input type="radio" id="female2" name="me2" class="female"
                                                    checked="" />
                                                <span> انثي</span>
                                                <span class="banner__inputlist--icon"><i class="fa fa-venus"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__list">
                                    <label>عمر</label>
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="banner__inputlist">
                                                <select class="custom-select-choose">
                                                    <option value="18" selected="">18</option>

                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="banner__inputlist">
                                                <select class="custom-select-choose">
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner__list">
                                    <label>البلد</label>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="banner__inputlist">
                                                <select class="custom-select-choose" id="country" name="country">
                                                    <option value="Afganistan">افغانستان</option>
                                                    <option value="Albania">البانیہ</option>
                                                    <option value="Algeria">الجیریا</option>
                                                    <option value="American Samoa">امریکی ساموا</option>
                                                    <option value="Andorra">andorrae</option>
                                                    <option value="Angola">انگولا</option>
                                                    <option value="Anguilla">انگویلا</option>
                                                    <option value="Antigua &amp; Barbuda">
                                                        قدیم اور باربوڈا
                                                    </option>
                                                    <option value="Argentina">ارجنٹائن</option>
                                                    <option value="Armenia">آرمینیا</option>
                                                    <option value="Aruba">اروبا</option>
                                                    <option value="Australia">آسٹریلیا</option>
                                                    <option value="Austria">آسٹریا</option>
                                                    <option value="Azerbaijan">آذربائیجان</option>
                                                    <option value="Bahamas">بہاماس</option>
                                                    <option value="Bahrain">بحرین</option>
                                                    <option value="Bangladesh" selected="">
                                                        <!-- بنگلہ دیش -->
                                                        قطر
                                                    </option>
                                                    <option value="Barbados">بارباڈوس</option>
                                                    <option value="Belarus">بیلاروس</option>
                                                    <option value="Belgium">بیلجیم</option>
                                                    <option value="Belize">belise</option>
                                                    <option value="Benin">بینن</option>
                                                    <option value="Bermuda">برمودا</option>
                                                    <option value="Bhutan">بھوٹان</option>
                                                    <option value="Bolivia">بولیویا</option>
                                                    <option value="Bonaire">بونیر</option>
                                                    <option value="Bosnia &amp; Herzegovina">
                                                        بوسنیا اور ہرزیگوینا
                                                    </option>
                                                    <option value="Botswana">بوٹسوانا</option>
                                                    <option value="Brazil">برازیل</option>
                                                    <option value="British Indian Ocean Ter">
                                                        برطانوی بحر ہند ٹیر
                                                    </option>
                                                    <option value="Brunei">برونائی</option>
                                                    <option value="Bulgaria">بلغاریہ</option>
                                                    <option value="Burkina Faso">برکینا فاسو</option>
                                                    <option value="Burundi">برونڈی</option>
                                                    <option value="Cambodia">کمبوڈیا</option>
                                                    <option value="Cameroon">کیمرون</option>
                                                    <option value="Canada">کینیڈا</option>
                                                    <option value="Canary Islands">کینری جزائر</option>
                                                    <option value="Cape Verde">گرین کیپ</option>
                                                    <option value="Cayman Islands">جزائر کیمن</option>
                                                    <option value="Central African Republic">
                                                        مرکزی افریقی جمہوریت
                                                    </option>
                                                    <option value="Chad">چاڈ</option>
                                                    <option value="Channel Islands">
                                                        چینل کے جزائر
                                                    </option>
                                                    <option value="Chile">چلی</option>
                                                    <option value="China">چین</option>
                                                    <option value="Christmas Island">
                                                        کرسمس جزیرہ
                                                    </option>
                                                    <option value="Cocos Island">کوکوس جزیرہ</option>
                                                    <option value="Colombia">کولمبیا</option>
                                                    <option value="Comoros">کاموروس</option>
                                                    <option value="Congo">کانگو</option>
                                                    <option value="Cook Islands">جزیرے کک جزیرے</option>
                                                    <option value="Costa Rica">کوسٹا ریکا</option>
                                                    <option value="Cote DIvoire">آئیوری کوسٹ</option>
                                                    <option value="Croatia">کروشیا</option>
                                                    <option value="Cuba">کیوبا</option>
                                                    <option value="Curaco">دل</option>
                                                    <option value="Cyprus">قبرص</option>
                                                    <option value="Czech Republic">جمہوریہ چیک</option>
                                                    <option value="Denmark">ڈنمارک</option>
                                                    <option value="Djibouti">جبوتی</option>
                                                    <option value="Dominica">ڈومینیکا</option>
                                                    <option value="Dominican Republic">
                                                        ڈومینیکن ریپبلک
                                                    </option>
                                                    <option value="East Timor">مشرقی تیمور</option>
                                                    <option value="Ecuador">ایکواڈور</option>
                                                    <option value="Egypt">مصر</option>
                                                    <option value="El Salvador">نجات دہندہ</option>
                                                    <option value="Equatorial Guinea">
                                                        استوائی گنی
                                                    </option>
                                                    <option value="Eritrea">اریٹیریا</option>
                                                    <option value="Estonia">ایسٹونیا</option>
                                                    <option value="Ethiopia">ایتھوپیا</option>
                                                    <option value="Falkland Islands">
                                                        فاکلینڈ جزیرے
                                                    </option>
                                                    <option value="Faroe Islands">جزائر فارو</option>
                                                    <option value="Fiji">فجی</option>
                                                    <option value="Finland">فن لینڈ</option>
                                                    <option value="France">فرانس</option>
                                                    <option value="French Guiana">
                                                        فرانسیسی گیانا
                                                    </option>
                                                    <option value="French Polynesia">
                                                        فرانسیسی پولینیشیا
                                                    </option>
                                                    <option value="French Southern Ter">
                                                        فرانسیسی سدرن ٹیر
                                                    </option>
                                                    <option value="Gabon">گبون</option>
                                                    <option value="Gambia">گیمبیا</option>
                                                    <option value="Georgia">جارجیا</option>
                                                    <option value="Germany">جرمنی</option>
                                                    <option value="Ghana">گھانا</option>
                                                    <option value="Gibraltar">جبرالٹر</option>
                                                    <option value="Great Britain">عظیم برطانیہ</option>
                                                    <option value="Greece">یونان</option>
                                                    <option value="Greenland">گرین لینڈ</option>
                                                    <option value="Grenada">گریناڈا</option>
                                                    <option value="Guadeloupe">گواڈیلوپ</option>
                                                    <option value="Guam">گوام</option>
                                                    <option value="Guatemala">گوئٹے مالا</option>
                                                    <option value="Guinea">گیانا</option>
                                                    <option value="Guyana">گیانا</option>
                                                    <option value="Haiti">ہیٹی</option>
                                                    <option value="Hawaii">ہوائی</option>
                                                    <option value="Honduras">ہونڈوراس</option>
                                                    <option value="Hong Kong">ہانگ کانگ</option>
                                                    <option value="Hungary">ہنگری</option>
                                                    <option value="Iceland">آئس لینڈ</option>
                                                    <option value="Indonesia">انڈونیشیا</option>
                                                    <option value="India">ہندوستان</option>
                                                    <option value="Iran">ایران</option>
                                                    <option value="Iraq">عراق</option>
                                                    <option value="Ireland">آئرلینڈ</option>
                                                    <option value="Isle of Man">آئل آف مین</option>
                                                    <option value="Israel">اسرا ییل</option>
                                                    <option value="Italy">اٹلی</option>
                                                    <option value="Jamaica">جمیکا</option>
                                                    <option value="Japan">جاپان</option>
                                                    <option value="Jordan">اردن</option>
                                                    <option value="Kazakhstan">قازقستان</option>
                                                    <option value="Kenya">کینیا</option>
                                                    <option value="Kiribati">کریباتی</option>
                                                    <option value="Korea North">کوریا شمال</option>
                                                    <option value="Korea Sout">کوریا ساؤتھ</option>
                                                    <option value="Kuwait">کویت</option>
                                                    <option value="Kyrgyzstan">کرغزستان</option>
                                                    <option value="Laos">لاؤس</option>
                                                    <option value="Latvia">لٹویا</option>
                                                    <option value="Lebanon">لبنان</option>
                                                    <option value="Lesotho">لیسوتھو</option>
                                                    <option value="Liberia">لائبیریا</option>
                                                    <option value="Libya">لیبیا</option>
                                                    <option value="Liechtenstein">لیچٹنسٹین</option>
                                                    <option value="Lithuania">لتھوانیا</option>
                                                    <option value="Luxembourg">لکسمبرگ</option>
                                                    <option value="Macau">مکاؤ</option>
                                                    <option value="Macedonia">میسیڈونیا</option>
                                                    <option value="Madagascar">مڈغاسکر</option>
                                                    <option value="Malaysia">ملائیشیا</option>
                                                    <option value="Malawi">ملاوی</option>
                                                    <option value="Maldives">مالدیپ</option>
                                                    <option value="Mali">مالی</option>
                                                    <option value="Malta">مالٹا</option>
                                                    <option value="Marshall Islands">
                                                        جزیرے مارشل
                                                    </option>
                                                    <option value="Martinique">مارٹنیک</option>
                                                    <option value="Mauritania">موریتانیا</option>
                                                    <option value="Mauritius">ماریشیس</option>
                                                    <option value="Mayotte">میوٹ</option>
                                                    <option value="Mexico">میکسیکو</option>
                                                    <option value="Midway Islands">مڈ وے جزیرے</option>
                                                    <option value="Moldova">مالڈووا</option>
                                                    <option value="Monaco">موناکو</option>
                                                    <option value="Mongolia">منگولیا</option>
                                                    <option value="Montserrat">مونٹسیریٹ</option>
                                                    <option value="Morocco">مراکش</option>
                                                    <option value="Mozambique">موزمبیق</option>
                                                    <option value="Myanmar">میانمار</option>
                                                    <option value="Nambia">نمبیا</option>
                                                    <option value="Nauru">نورو</option>
                                                    <option value="Nepal">نیپال</option>
                                                    <option value="Netherland Antilles">
                                                        نیدرلینڈ اینٹیلس
                                                    </option>
                                                    <option value="Netherlands">
                                                        نیدرلینڈ (ہالینڈ ، یورپ)
                                                    </option>
                                                    <option value="Nevis">نیوس</option>
                                                    <option value="New Caledonia">نیو کیلیڈونیا</option>
                                                    <option value="New Zealand">نیوزی لینڈ</option>
                                                    <option value="Nicaragua">نکاراگوا</option>
                                                    <option value="Niger">نائجر</option>
                                                    <option value="Nigeria">نائیجیریا</option>
                                                    <option value="Niue">niue</option>
                                                    <option value="Norfolk Island">
                                                        نورفولک جزیرہ
                                                    </option>
                                                    <option value="Norway">ناروے</option>
                                                    <option value="Oman">عمان</option>
                                                    <option value="Pakistan">پاکستان</option>
                                                    <option value="Palau Island">پلاؤ جزیرہ</option>
                                                    <option value="Palestine">فلسطین</option>
                                                    <option value="Panama">پاناما</option>
                                                    <option value="Papua New Guinea">
                                                        پاپوا نیو گنی
                                                    </option>
                                                    <option value="Paraguay">پیراگوئے</option>
                                                    <option value="Peru">پیرو</option>
                                                    <option value="Phillipines">فلپائن</option>
                                                    <option value="Pitcairn Island">
                                                        پٹیکرن جزیرہ
                                                    </option>
                                                    <option value="Poland">پولینڈ</option>
                                                    <option value="Portugal">پرتگال</option>
                                                    <option value="Puerto Rico">پورٹو ریکو</option>
                                                    <option value="Qatar">قطر</option>
                                                    <option value="Republic of Montenegro">
                                                        جمہوریہ مونٹی نیگرو
                                                    </option>
                                                    <option value="Republic of Serbia">
                                                        جمہوریہ سربیا
                                                    </option>
                                                    <option value="Reunion">ری یونین</option>
                                                    <option value="Romania">رومانیہ</option>
                                                    <option value="Russia">روس</option>
                                                    <option value="Rwanda">روانڈا</option>
                                                    <option value="St Barthelemy">سینٹ بارتھیمی</option>
                                                    <option value="St Eustatius">سینٹ Eustatius</option>
                                                    <option value="St Helena">سینٹ ہیلینا</option>
                                                    <option value="St Kitts-Nevis">
                                                        سینٹ کٹس-نیوس
                                                    </option>
                                                    <option value="St Lucia">سینٹ لوسیا</option>
                                                    <option value="St Maarten">سینٹ مارٹن</option>
                                                    <option value="St Pierre &amp; Miquelon">
                                                        سینٹ پیری اور میکیلون
                                                    </option>
                                                    <option value="St Vincent &amp; Grenadines">
                                                        سینٹ ونسنٹ اور گریناڈائنز
                                                    </option>
                                                    <option value="Saipan">سیپن</option>
                                                    <option value="Samoa">ساموا</option>
                                                    <option value="Samoa American">ساموا امریکن</option>
                                                    <option value="San Marino">سان مارینو</option>
                                                    <option value="Sao Tome &amp; Principe">
                                                        ساؤ ٹوم اور پرنسپ
                                                    </option>
                                                    <option value="Saudi Arabia">سعودی عرب</option>
                                                    <option value="Senegal">سینیگال</option>
                                                    <option value="Seychelles">سیچیلس</option>
                                                    <option value="Sierra Leone">سیرا لیون</option>
                                                    <option value="Singapore">سنگاپور</option>
                                                    <option value="Slovakia">سلوواکیہ</option>
                                                    <option value="Slovenia">سلووینیا</option>
                                                    <option value="Solomon Islands">
                                                        جزائر سلیمان
                                                    </option>
                                                    <option value="Somalia">صومالیہ</option>
                                                    <option value="South Africa">جنوبی افریقہ</option>
                                                    <option value="Spain">اسپین</option>
                                                    <option value="Sri Lanka">سری لنکا</option>
                                                    <option value="Sudan">سوڈان</option>
                                                    <option value="Suriname">سورینام</option>
                                                    <option value="Swaziland">سوازیلینڈ</option>
                                                    <option value="Sweden">سویڈن</option>
                                                    <option value="Switzerland">سوئٹزرلینڈ</option>
                                                    <option value="Syria">شام</option>
                                                    <option value="Tahiti">تاہیتی</option>
                                                    <option value="Taiwan">تائیوان</option>
                                                    <option value="Tajikistan">تاجکستان</option>
                                                    <option value="Tanzania">تنزانیہ</option>
                                                    <option value="Thailand">تھائی لینڈ</option>
                                                    <option value="Togo">جانے کے لئے</option>
                                                    <option value="Tokelau">ٹوکیلاؤ</option>
                                                    <option value="Tonga">ٹونگا</option>
                                                    <option value="Trinidad &amp; Tobago">
                                                        ٹرینیڈاڈ اور ٹوباگو
                                                    </option>
                                                    <option value="Tunisia">تیونس</option>
                                                    <option value="Turkey">ترکی</option>
                                                    <option value="Turkmenistan">ترکمانستان</option>
                                                    <option value="Turks &amp; Caicos Is">
                                                        ترک اور کیکوس ہے
                                                    </option>
                                                    <option value="Tuvalu">tuvalu</option>
                                                    <option value="Uganda">یوگنڈا</option>
                                                    <option value="United Kingdom">
                                                        متحدہ سلطنت یونائیٹڈ کنگڈم
                                                    </option>
                                                    <option value="Ukraine">یوکرین</option>
                                                    <option value="United Arab Erimates">
                                                        متحدہ عرب امارات
                                                    </option>
                                                    <option value="United States of America">
                                                        ریاست ہائے متحدہ امریکہ
                                                    </option>
                                                    <option value="Uraguay">یوروگوئے</option>
                                                    <option value="Uzbekistan">ازبکستان</option>
                                                    <option value="Vanuatu">وانواتو</option>
                                                    <option value="Vatican City State">
                                                        ویٹیکن سٹی اسٹیٹ
                                                    </option>
                                                    <option value="Venezuela">وینزویلا</option>
                                                    <option value="Vietnam">ویتنام</option>
                                                    <option value="Virgin Islands (Brit)">
                                                        ورجن جزیرے (برٹ)
                                                    </option>
                                                    <option value="Virgin Islands (USA)">
                                                        ورجن جزیرے (USA)
                                                    </option>
                                                    <option value="Wake Island">ویک جزیرہ</option>
                                                    <option value="Wallis &amp; Futana Is">
                                                        والس اور فوٹانا ہے
                                                    </option>
                                                    <option value="Yemen">یمن</option>
                                                    <option value="Zaire">زائر</option>
                                                    <option value="Zambia">زیمبیا</option>
                                                    <option value="Zimbabwe">زمبابوے</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary mt-5">
                                        <span> ابحث عن شريك </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7  d-none d-md-block pb-5">
                        <div class="banner__thumb banner__thumb--thumb1 wow fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay="1s">
                            <img src="./images/9.png" alt="Dating Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Register Section End Here =============== -->
@endsection
