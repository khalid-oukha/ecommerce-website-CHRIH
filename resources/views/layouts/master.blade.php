<!doctype html>
<html>

    @include('layouts.head')


<body class="max-w-[1920px] mx-auto font-[sans-serif] text-[#333] text-sm">
    <div class="bg-white">

        @include('layouts.navbar')
        @yield('content')

        @include('layouts.footer')

    </div>


</body>
@include('layouts.footer_scripts')
</html>
