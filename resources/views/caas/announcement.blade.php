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
        @if (auth()->guard('caas')->user()->status->isPass == 1 && auth()->guard('caas')->user()->announcecheck()->isMessageActive == 1 )
        <p class="announcement text-secondary text-[12px] text-justify max-w-[250px] mx-auto font-vinque">
            {!! $msg->pass_msg !!}
        </p>       
        @elseif (auth()->guard('caas')->user()->status->isPass == 0)
        <p class="announcement text-secondary text-[12px] text-justify max-w-[200px] mx-auto font-vinque">
            {!! $msg->failed_msg !!}
        </p>
        @elseif (auth()->guard('caas')->user()->announcecheck()->isMessageActive == 0 && auth()->guard('caas')->user()->status->isPass == 1)
         <p class="announcement text-secondary text-[12px] text-center max-w-[200px] mx-auto font-vinque">
            Tahap {{ auth()->guard('caas')->user()->status->stages->stagesName }} sedang berlangsung. Cek lagi jika OA DLOR 2024 sudah memberi notifikasi.
        </p>
        @endif

        @if (auth()->guard('caas')->user()->announcecheck()->isPlotActive == 1 && auth()->guard('caas')->user()->status->isPass == 1)
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
