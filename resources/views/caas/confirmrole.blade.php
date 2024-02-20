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
    
<!-- warning jadwal start -->
<div class="container relative max-w-3xl mx-auto py-10">
    <div class="flex justify-center mt-[50px]">
        <img src="{{ asset('/assets/caas/dashboardcaas/warning.png') }}" alt="" class="warning-jadwal px-4 h-[242px] w-[372px]">
    </div>
    <div class="absolute top-5 left-0 right-0 text-center mt-[79px] z-10">
        <form action="{{ route('caas.save.role') }}" method="post">
            @csrf
        <h1 class="text-warning-jadwal text-fivedary text-[22px] font-semibold font-ringbearer mb-3">
            Perhatian!!
        </h1>
        <input type="hidden" name="id" value="{{ $role->id }}">
        <p class="text-deksjad text-secondary max-w-xs mx-auto  text-[15px] font-semibold font-vinque mt-6 px-3">
            Setelah memilih Role <span class="text-[#4322fb] ">{{ $role->roleName }}</span><br> 
            kamu tidak dapat mengubah pilihan.<br>
            Apakah kamu yakin ?
        </p>
        <div class="box-button-warning-jadwal mt-5 max-w-[270px] text-[12px] mx-auto flex justify-center gap-x-4 font-vinque text-fivedary">
            <a href="{{ route('caas.role')}}" class="box-button-warjad bg-merah hover:bg-merah-tua px-6 py-2 shadow-secondary shadow-lg">
                Kembali
            </a>
            <button type="submit" class="box-button-warjad bg-merah hover:bg-merah-tua px-6 py-2 shadow-secondary shadow-lg">
                Yakin
            </button>
        </div>
        </form>
    </div>
</div>
<!-- warning jadwal ends -->


@include('caas.partials.footer')



</body>
</html>
