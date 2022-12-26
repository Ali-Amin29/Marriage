@include('DashBoard.Include.header')
<body>
    {{--  preLoading   --}}
@include('DashBoard.Include.preloading')
    {{-- Wrapping Nav   --}}
@include('DashBoard.Include.wrappingSide')

{{--  start Client  --}}
    {{-- IndexPage --}}
@yield('Container.client')
    {{-- ProfileCustomer --}}
@yield('Container.profileCustomer')
    {{-- Confirm-Registeration --}}
@yield('Container.confirmation')
{{--  end Client  --}}

{{--  start Supplier Service  --}}
@yield('Container.supplier')
@yield('container.user-search')
@yield('container.supplier-service')
@yield('Container.invoice')
@yield('Container.search-partiner')


{{--  end Supplier Service  --}}




    {{--  JS Scripts  --}}
@include('DashBoard.Include.script')
</body>

</html>
