<!-- all js here -->
<script src={{ asset('js/vendor/jquery-3.6.0.min.js') }}></script>
<script src={{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}></script>
<script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
<script src={{ asset('js/owl.carousel.min.js') }}></script>
<script src={{ asset('js/slick.min.js') }}></script>
<script src={{ asset('js/jquery.ajaxchimp.min.js') }}></script>
<script src={{ asset('assets/js/swiper.min.js') }}></script>
<script src={{ asset('js/plugins.js') }}></script>
<script src={{ asset('js/main.js') }}></script>
<script src="js/countdown-timer.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/slick.min.js"></script>




<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>

<script src="./vendor/jquery-steps/build/jquery.steps.min.js"></script>
<script src="./vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- Form validate init -->
<script src="./js/plugins-init/jquery.validate-init.js"></script>



<!-- Form Steps -->
<script src="./vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>

<script>
    $(document).ready(function() {
        // SmartWizard initialize
        $('#smartwizard').smartWizard();
    });
</script>
{{--  Telphone Check  --}}
<script src="./build/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector('#phone');
    window.intlTelInput(input, {});
</script>
