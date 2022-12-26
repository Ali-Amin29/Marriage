@extends('DashBoard.Layout.master')
@section('container.user-search')
<!--**********************************
    Content body start
***********************************-->
      <div class="content-body">
          <div class="container-fluid">
              <!-- Add Order -->
              @include('DashBoard.Include.add-event')
              <!--**********************************
                              Table Start
                   ***********************************-->
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card ">
                          <div class="card-header">
                              <h4 class="card-title"> نتائج البحث </h4>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-responsive-sm">
<colgroup>
      <col span="1" style="background-color:#fff">

  <col span="1" style="background-color: rgb(250, 211, 211)">
      <col span="2" style="background-color: #cef1cd">

</colgroup>
                                      <thead>
                                          <tr>

                                              <th> الاساسي</th>
                                              <th>علي علي</th>
                                              <th>محمد محمد</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <th> الجنس</th>
                                              <td>ذكر </td>
                                              <td> انثي</td>
                                          </tr>

                                          <tr>
                                              <th> العمر</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>

                                          <tr>
                                              <th> السكن</th>
                                              <td>الرياض </td>
                                              <td>مكة المكرمة </td>
                                          </tr>


                                          <tr>
                                              <th>الحالة الأجتماعية </th>
                                              <td>اعزب </td>
                                              <td>اعزب </td>
                                          </tr>


                                          <tr>
                                              <th>طبيعية العمل </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th> الحالة الصحية</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th>الجمال </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th>الوزن </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th>الطول </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th> لون البشره</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>


                                          </tr>

                                          <tr>
                                              <th>عدد الأطفال ( إن وجد) </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th> هل تقبلين بالتعدد</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th> المستوي التعليمي</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>


                                          <tr>
                                              <th>الحالة المادية </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>

                                          <tr>
                                              <th> مستوي التدين</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>


                                          </tr>
                                          <tr>
                                              <th> مستوي التدين</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>

                                          <tr>
                                              <th> مكات الاقامة </th>

                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>

                                          <tr>
                                              <th> المدينة</th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>


                                          </tr>
                                          <tr>
                                              <th> الجنسية</th>

                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>


                                          </tr>

                                          <tr>
                                              <th> مكان الاقامة </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>

                                          <tr>
                                              <th> المدينة </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>

                                          <tr>
                                              <th> الاصل </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>
                                          <tr>
                                              <th> القبيلة </th>
                                              <td> 24 سنه</td>
                                              <td>24 سنه </td>
                                          </tr>
                                      </tbody>

                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>





              <div class="row">
                  <div class="col-md-6">
                      <div class="card text-center">
                          <div class="card-header">
                              <h5 class="card-title">تكلم عن نفسك </h5>
                          </div>
                          <div class="card-body">

                              <p class="card-text">ابدا في تعريف عن نفسي شخص يحب ممارسةالرياضة وايضا ملتزم في جوانب
                                  الديني اعمل في شركة خاص للقطاع المشاريع الهندسية اتطلع للتعرف علي شريك حياتي والعيش
                                  معا</p>
                          </div>

                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="card text-center">
                          <div class="card-header">
                              <h5 class="card-title"> المواصفات التي تريدة </h5>
                          </div>
                          <div class="card-body">
                              <p class="card-text"> الموافات التي تريدة في شريك حياتي هي تكون ملتزمة في جوانب الدينية
                                  وليها فكر في تعرف علي شريك الحياه والعيش معه وتكون ذو مواصفات جميلة في شكل </p>
                          </div>

                      </div>
                  </div>



                  <div class="col-md-6">
                      <div class="card text-center">
                          <div class="card-header">
                              <h5 class="card-title">تكلمي عن نفسك </h5>
                          </div>
                          <div class="card-body">

                              <p class="card-text">ابدا في تعريف عن نفسي شخص يحب ممارسةالرياضة وايضا ملتزم في جوانب
                                  الديني اعمل في شركة
                                  خاص للقطاع المشاريع الهندسية اتطلع للتعرف علي شريك حياتي والعيش معا</p>
                          </div>

                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="card text-center">
                          <div class="card-header">
                              <h5 class="card-title"> المواصفات التي تريدها</h5>
                          </div>
                          <div class="card-body">
                              <p class="card-text"> الموافات التي تريدة في شريك حياتي هي تكون ملتزمة في جوانب الدينية
                                  وليها فكر في تعرف
                                  علي شريك الحياه والعيش معه وتكون ذو مواصفات جميلة في شكل </p>
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
