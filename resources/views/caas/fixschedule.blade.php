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

<!-- fix jadwal start -->
<div class="container relative max-w-xl mx-auto py-2">
    <div class="absolute top-5 left-0 right-0 text-center mt-5 md:mt-10 px-4">
        <h1 class="text-fix-schedule text-fivedary text-[32px] font-bold font-ringbearer mb-4">Jadwal Kamu</h1>
        <div class="bg-light pt-6 pb-6  pl-6  pr-6 text-center shadow-black shadow-xl">
            <h3 class="text-fix-secjad text-fivedary text-[15px] font-vinque mb-6">
                Kamu telah memilih jadwal {{ auth()->guard('caas')->user()->plots->shifts->shift_name }}, dan jadwal tersebut tidak
                dapat diubah kembali. Terima Kasih
            </h3>
            <h4 class="text-fix-trijad text-black text-[30px] font-enchanted mb-3">
                {{ $day }}
            </h4>
            <h3 class="text-fix-secjad text-fivedary text-[15px] font-vinque mb-7">
                Tanggal : {{ $date }} <br>
                Waktu   : {{ $time }} WIB
            </h3>
            <h3 class="text-fix-secjad text-fivedary text-[15px] font-vinque">
                Semangat dan pantau terus informasi di OA Line
                Recruitment Daskom Laboratory untuk instruksi
                berikutnya.
            </h3>
        </div>
    </div> 
</div>
<!-- fix jadwal end -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
