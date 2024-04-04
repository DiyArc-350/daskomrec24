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


<!-- kelulusan start -->
<div class="container relative max-w-2xl mx-auto py-5">
    <div class="flex justify-center">
        <img src="{{ asset('/assets/caas/dashboardcaas/announcement.png') }}" alt="" class="paper h-[460px] w-[310px]">
    </div>
    
    <div class="text-announce absolute top-[20px] left-0 right-0 text-center mt-[85px] z-10"> 
        <h1 class="text-announce-title text-secondary text-[22px] font-ringbearer mb-[18px]">Announcement</h1>
        @if (auth()->guard('caas')->user()->status->isPass == 1 && auth()->guard('caas')->user()->announcecheck()->isMessageActive == 1 && auth()->guard('caas')->user()->stages()->id == auth()->guard('caas')->user()->status->stages->id)
        <p class="announcement text-secondary text-[12px] text-justify max-w-[250px] mx-auto font-vinque">
            Selamat <b>{{ ucwords(strtolower(auth()->guard('caas')->user()->name)) }}</b>!!<br>
            {!! $msg->pass_msg !!}
        </p>       
        @elseif (auth()->guard('caas')->user()->status->isPass == 0 && auth()->guard('caas')->user()->stages()->id != auth()->guard('caas')->user()->status->stages->id )
        <p class="announcement text-secondary text-[12px] text-justify max-w-[250px] mx-auto font-vinque">
            <b>{{ ucwords(strtolower(auth()->guard('caas')->user()->name)) }}</b>,<br>
            kamu dinyatakan tidak lolos pada <b>Tahap {{ auth()->guard('caas')->user()->status->stages->stagesName }}</b>. Terimakasih telah mengikuti rangkaian recruitment dari Daskom Laboratory. <br><br>
            "Jangan jadikan kegagalan sebagai alasan untuk menyerah. Jadikanlah sebagai motivasi untuk terus berusaha." - R.A. Kartini<br><br>
            Tetap Semangat!!
        </p>
        @else
        <p class="announcement text-secondary text-[12px] text-center max-w-[250px] mx-auto font-vinque">
            <span class="text-[#4322fb] ">Tahap {{ auth()->guard('caas')->user()->status->stages->stagesName }}</span> sedang berlangsung.<br> Semangat dan pantau terus informasi di OA Line Recruitment Daskom Laboratory untuk instruksi berikutnya.
        </p>
        @endif

        @if (auth()->guard('caas')->user()->announcecheck()->isPlotActive == 1 && auth()->guard('caas')->user()->status->isPass == 1 && !boolval(auth()->guard('caas')->user()->plots))
        <a href="{{ route('caas.schedule') }}">
            <button class="button-schedule mt-[130px] mb-0 text-secondary font-semibold font-ringbearer text-[12px] bg-coklat-muda px-4 py-2 shadow-secondary shadow-xl hover:text-coklat-terang hover:bg-primary">
                Pilih Jadwal
            </button>
        </a>
        @endif
    </div> 
</div>
<!-- kelulusan end -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
