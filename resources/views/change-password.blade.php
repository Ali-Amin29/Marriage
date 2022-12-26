@extends('Layout.master')
@section('container.change-password')
<!-- header area end -->
<div class="row">
<div class="conformation">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 col-md-12 mb-5">
<div class="authincation-content">
  <div class="row no-gutters">
    <div class="col-xl-12">
      <div class="auth-form">
        <h4 class="mb-4 confirm-code">استعادة كلمة المرور</h4>
        <h4 class="mb-4">
          الرجاء ادخال رقم الهاتف لاستعادة كلم المرور
        </h4>

        <form action="index.html">
          <p>الرقم الهاتف</p>
          <div class="form-group">
            <div>
              <input
                type="text"
                class="form-control autofocus border border-warning"
                id="val-phoneus"
                name="val-phoneus"
                value="9000344555544"
              />
            </div>
          </div>
        </form>

        <button type="button" class="btn btn-primary rounded-5">
          ارسال الكود
        </button>
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
@endsection
