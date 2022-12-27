@include('Include.header')

@include('Include.nav')

{{--  Home Page  --}}
@yield('container.index')


{{-- Change-Password --}}
@yield('container.change-password')
{{-- forget-Password --}}
@yield('container.forget-password')
{{-- Login Form --}}
@yield('container.Login')
{{-- Check Register Form --}}
@yield('RegisterCheck')
{{-- UserRegister Form --}}
@yield('container.UserRegister')
{{-- ServiceProvide Register Form --}}
@yield('container.ServiceProvideRegister')
{{-- Services --}}
@yield('container.services')

@include('Include.footer')
@include('Include.script')
</body>

</html>
