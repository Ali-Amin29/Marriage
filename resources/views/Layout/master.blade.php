@include('Include.header')

<body
data-bs-spy="scroll"
data-bs-target="#navigation"
data-bs-offset="0"
tabindex="0"
>
    @include('Include.nav')

    {{--  Home Page  --}}
    @yield('container.index')


    {{-- Change-Password --}}
    @yield('container.change-password')
    {{-- forget-Password --}}
    @yield('container.forget-password')
    {{-- Login Form --}}
    @yield('container.Login')
    {{-- Register Form --}}
    @yield('container.Register')
    {{-- Services --}}
    @yield('container.services')

    @include('Include.footer')
    @include('Include.script')
</body>

</html>
