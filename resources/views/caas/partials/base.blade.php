<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/homepage/LogoDlor24.jpg') }}" />
    <title>{{ $title }}</title>
</head>
<body class="bg-play-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword ">
    
    @include('caas.partials.sidebar')

    @yield('content')

    <!-- footer start -->
    <footer class="fixed bottom-0 left-0 right-0 mt-3 mb-3 text-center">
        <h1 class="lg:text-[20px] font-ringbearer text-[#A37651] text-stroke sm:text-[15px] md:text-[15px]">#Venture The Deep Within
    </footer>
    <!-- footer ends -->

    <!-- script sidebar -->
    {{-- <script src="/public/js/sidebar.js"></script> --}}
    <script src="{{ asset('js/sidebar.js') }}"></script>

</body>

</html>
