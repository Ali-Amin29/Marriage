@extends('DashBoard.Layout.master')
@section('Container.profileCustomer')
<!--**********************************
    Content body start
***********************************-->

    <div class="content-body" style="min-height: 788px">
      <div class="container-fluid">
        <!-- Add Order -->
        <div class="modal fade" id="addOrderModalside">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal">
                  <span>×</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label class="text-black font-w500">Event Name</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label class="text-black font-w500">Event Date</label>
                    <input type="date" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label class="text-black font-w500">Description</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-primary">
                      Create
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
              <div class="profile-head">
                <div class="photo-content">
                  <div class="cover-photo"></div>
                </div>
                <div class="profile-info">
                  <div class="profile-photo">
                    <img
                      src="./images/1.webp"
                      alt=""
                      class="img-fluid rounded-circle"
                    />
                  </div>
                  <div class="profile-details">
                    <div class="profile-name px-5 pt-2">
                      <h4 class="text-primary mb-0">احمد خالد</h4>
                      <p>مهندس معماري</p>
                    </div>
                    <div class="profile-email px-2 pt-2">
                      <h4 class="text-muted mb-0">ahmad@email.com</h4>
                      <p>الايميل</p>
                    </div>
                    <div class="dropdown ml-auto">
                      <a
                        href="#"
                        class="btn btn-primary light sharp"
                        data-toggle="dropdown"
                        aria-expanded="true"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="18px"
                          height="18px"
                          viewBox="0 0 24 24"
                          version="1.1"
                        >
                          <g
                            stroke="none"
                            stroke-width="1"
                            fill="none"
                            fill-rule="evenodd"
                          >
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle
                              fill="#000000"
                              cx="5"
                              cy="12"
                              r="2"
                            ></circle>
                            <circle
                              fill="#000000"
                              cx="12"
                              cy="12"
                              r="2"
                            ></circle>
                            <circle
                              fill="#000000"
                              cx="19"
                              cy="12"
                              r="2"
                            ></circle>
                          </g></svg
                      ></a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item">
                          <i class="fa fa-user-circle text-primary mr-2"></i>
                          رؤية الملف الشخصي
                        </li>
                        <li class="dropdown-item">
                          <i class="fa fa-users text-primary mr-2"></i> اضافة
                          للملف الشخصي
                        </li>
                        <li class="dropdown-item">
                          <i class="fa fa-plus text-primary mr-2"></i> اضافة
                          للجروب
                        </li>
                        <li class="dropdown-item">
                          <i class="fa fa-ban text-primary mr-2"></i> حظر
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div class="card-body">
                <div class="profile-statistics mb-5">
                  <div class="text-center">
                    <div class="row">
                      <div class="col">
                        <h3 class="m-b-0">150</h3>
                        <span>متابع</span>
                      </div>
                      <div class="col">
                        <h3 class="m-b-0">140</h3>
                        <span>متابع</span>
                      </div>
                      <div class="col">
                        <h3 class="m-b-0">45</h3>
                        <span>متابع</span>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a
                        href="javascript:void()"
                        class="btn btn-primary mb-1 mr-1"
                        >تابع</a
                      >
                      <a
                        href="javascript:void()"
                        class="btn btn-primary mb-1"
                        data-toggle="modal"
                        data-target="#sendMessageModal"
                        >ارسل رسالة</a
                      >
                    </div>
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="sendMessageModal">
                    <div
                      class="modal-dialog modal-dialog-centered"
                      role="document"
                    >
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">ارسل رسالة</h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                          >
                            <span>×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="comment-form">
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label
                                    for="author"
                                    class="text-black font-w600"
                                    >الاسم
                                    <span class="required">*</span></label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    name="الاسم"
                                    placeholder="الاسم"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label
                                    for="email"
                                    class="text-black font-w600"
                                    >الايميل
                                    <span class="required">*</span></label
                                  >
                                  <input
                                    type="text"
                                    class="form-control"
                                    placeholder="الايميل"
                                    name="Email"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label
                                    for="comment"
                                    class="text-black font-w600"
                                    >التعليق</label
                                  >
                                  <textarea
                                    rows="8"
                                    class="form-control"
                                    name="comment"
                                    placeholder="تعليق"
                                  ></textarea>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group mb-0">
                                  <input
                                    type="submit"
                                    value="انشر التعليق"
                                    class="submit btn btn-primary"
                                    name="submit"
                                  />
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="profile-blog mb-5">
                  <h5 class="text-primary d-inline">عنوان للفقره</h5>
                  <img
                    src="./images/1.webp"
                    alt=""
                    class="img-fluid mt-4 mb-4 w-100"
                  />
                  <h4>
                    <a href="post-details.html" class="text-black"
                      >هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،</a
                    >
                  </h4>
                  <p class="mb-0">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                    توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                    هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                    الحروف التى يولدها التطبيق.
                  </p>
                </div>
                <div class="profile-interest mb-5">
                  <h5 class="text-primary d-inline">الاهتمامات</h5>
                  <div class="row mt-4 sp4" id="lightgallery">
                    <a
                      href="./images/1.webp"
                      data-exthumbimage="./images/1.webp"
                      data-src="./images/1.webp"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6"
                    >
                      <img src="./images/1.webp" alt="" class="img-fluid" />
                    </a>
                    <a
                      href="./images/1.webp"
                      data-exthumbimage="./images/1.webp"
                      data-src="./images/1.webp"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6"
                    >
                      <img src="./images/1.webp" alt="" class="img-fluid" />
                    </a>
                    <a
                      href="./images/1.webp"
                      data-exthumbimage="./images/1.webp"
                      data-src="./images/1.webp"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6"
                    >
                      <img src="./images/1.webp" alt="" class="img-fluid" />
                    </a>
                    <a
                      href="./images/1.webp"
                      data-exthumbimage="./images/1.webp"
                      data-src="./images/1.webp"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6"
                    >
                      <img src="./images/1.webp" alt="" class="img-fluid" />
                    </a>
                    <a
                      href="./images/1.webp"
                      data-exthumbimage="./images/1.webp"
                      data-src="./images/1.webp"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6"
                    >
                      <img src="./images/1.webp" alt="" class="img-fluid" />
                    </a>
                    <a
                      href="./images/1.webp"
                      data-exthumbimage="./images/1.webp"
                      data-src="./images/1.webp"
                      class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6"
                    >
                      <img src="./images/1.webp" alt="" class="img-fluid" />
                    </a>
                  </div>
                </div>
                <div class="profile-news">
                  <h5 class="text-primary d-inline">اخر الاخبار</h5>
                  <div class="media pt-3 pb-3">
                    <img
                      src="./images/1.webp"
                      alt="image"
                      class="mr-3 rounded"
                      width="75"
                    />
                    <div class="media-body">
                      <h5 class="m-b-5">
                        <a href="post-details.html" class="text-black">
                          يوضع في هذا الجزء عنوان</a
                        >
                      </h5>
                      <p class="mb-0">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                      </p>
                    </div>
                  </div>
                  <div class="media pt-3 pb-3">
                    <img
                      src="./images/1.webp"
                      alt="image"
                      class="mr-3 rounded"
                      width="75"
                    />
                    <div class="media-body">
                      <h5 class="m-b-5">
                        <a href="post-details.html" class="text-black">
                          يوضع في هذا الجزء عنوان</a
                        >
                      </h5>
                      <p class="mb-0">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                      </p>
                    </div>
                  </div>
                  <div class="media pt-3 pb-3">
                    <img
                      src="./images/1.webp"
                      alt="image"
                      class="mr-3 rounded"
                      width="75"
                    />
                    <div class="media-body">
                      <h5 class="m-b-5">
                        <a href="post-details.html" class="text-black">
                          يوضع في هذا الجزء عنوان</a
                        >
                      </h5>
                      <p class="mb-0">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة،
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="card">
              <div class="card-body">
                <div class="post-details">
                  <h3 class="mb-2 text-black">يوضع هنا عنوان فرعي</h3>
                  <ul class="mb-4 post-meta d-flex flex-wrap">
                    <li class="post-author mr-3">بواسطة الادمن</li>
                    <li class="post-date mr-3">
                      <i class="fa fa-calender"></i>18 نوفمبر 2020
                    </li>
                    <li class="post-comment">
                      <i class="fa fa-comments-o"></i> 28
                    </li>
                  </ul>
                  <img src="./images/02.jpg" alt="" class="img-fluid mb-3" />
                  <p>
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                    توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                    هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                    الحروف التى يولدها التطبيق. تريد، النص لن يبدو مقسما ولا
                    يحوي أخطاء لغوية، مولد النص
                  </p>
                  <p>
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                    توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                    هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                    الحروف التى يولدها التطبيق. تريد، النص لن يبدو مقسما ولا
                    يحوي أخطاء لغوية، مولد النص
                  </p>
                  <p>
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                    توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                    هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                    الحروف التى يولدها التطبيق. تريد، النص لن يبدو مقسما ولا
                    يحوي أخطاء لغوية، مولد النص
                  </p>
                  <p>
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                    توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                    هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                    الحروف التى يولدها التطبيق. تريد، النص لن يبدو مقسما ولا
                    يحوي أخطاء لغوية، مولد النص
                  </p>
                  <div class="profile-skills mt-5 mb-5">
                    <h4 class="text-primary mb-2">المهارات</h4>
                    <a
                      href="javascript:void()"
                      class="btn btn-primary light btn-xs mb-1"
                      >القرءاه</a
                    >
                    <a
                      href="javascript:void()"
                      class="btn btn-primary light btn-xs mb-1"
                      >السباحة</a
                    >
                    <a
                      href="javascript:void()"
                      class="btn btn-primary light btn-xs mb-1"
                      >ركوب الخيل</a
                    >
                    <a
                      href="javascript:void()"
                      class="btn btn-primary light btn-xs mb-1"
                      >التزحلق</a
                    >
                    <a
                      href="javascript:void()"
                      class="btn btn-primary light btn-xs mb-1"
                      >الرماية</a
                    >
                  </div>
                  <div class="comment-respond" id="respond">
                    <h4
                      class="comment-reply-title text-primary mb-3"
                      id="reply-title"
                    >
                      اترك تعليق
                    </h4>
                    <form class="comment-form" id="commentform" method="post">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="author" class="text-black font-w600"
                              >الاسم <span class="required">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              name="Author"
                              placeholder="الاسم"
                              id="author"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="email" class="text-black font-w600"
                              >الايميل <span class="required">*</span></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              placeholder="الايميل"
                              name="Email"
                              id="email"
                            />
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <label for="comment" class="text-black font-w600"
                              >تعليق</label
                            >
                            <textarea
                              rows="8"
                              class="form-control"
                              name="comment"
                              placeholder="تعليق"
                              id="comment"
                            ></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="form-group">
                            <input
                              type="submit"
                              value="انشر التعليق"
                              class="submit btn btn-primary"
                              id="submit"
                              name="submit"
                            />
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--**********************************
              Content body end
          ***********************************-->

@endsection
