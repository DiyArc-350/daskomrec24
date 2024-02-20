<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/homepage/LogoDlor24.jpg') }}" />
    <title>{{ $title }}</title>
</head>
<body class="bg-play-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-y-auto">
    
<!-- header start -->
<div class="container flex justify-between">
    @include('caas.partials.sidebar')
</div>
<!-- header ends -->

 <!-- fix role start -->
<div class="container relative max-w-2xl mx-auto py-1">
    <div class="deksRole text-center mt-7 mb-2">
        <h1 class="text-sixdary text-[30px] font-bold font-ringbearer mb-1">Your Role</h1> 
        <h4 class="text-sixdary text-[27px] font-bold font-ringbearer mb-3">in dlor 2024</h4>
    </div>
    <div class="role flex justify-center">
        <img src="{{ auth()->guard('caas')->user()->role->roles->profilepic }}" alt="" class="px-4 h-[390px] w-[335px]">
    </div>
</div>
<!-- fix role end -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
