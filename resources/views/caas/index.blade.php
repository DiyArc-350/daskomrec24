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
     <!-- navbar start -->
        <div class="sidebar fixed left-0 right-6 h-full w-[40px] bg-hijau-gelap bg-opacity-70 pr-5 pt-3 z-50 transition-all ease-in-out duration-700">
            <div class="flex relative items-center">
                <i class="absolute top-2 -right-4 cursor-pointer text-md" id="btn">
                    <img src="{{ asset('/assets/caas/sidebar/navbar.png') }}" alt="" class="h-[25px] w-[35px]"/>
                </i>
            </div>
            <ul class="profile text-fivedary font-ringbearer mt-[40px] ml-3 h-full">
            <div class="boxsidebar pb-4 m-2 text-[16px] opacity-0 pointer-events-none">
                <div class="mx-2 mt-2  font-semibold">
                    <h1>Account</h1> 
                </div>

                <li class="relative mt-0 p-1 list-none">
                    <a href="{{ route('caas.changepass') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9  rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">Change Password</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="{{ route('caas.dashboard') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">Profile</span>
                    </a>
                </li>

                <div class="mx-2 mt-3 font-semibold">
                    <h1>Contact</h1>
                </div>

                <li class="relative mt-0 p-1 list-none">
                    <a href="https://linevoom.line.me/user/_dUYKk5YmW4sA01qmDTdxD-Gy3hELH0BNMHnOFiM" target="_blank" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">OA Line</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="{{ route('caas.assistant.contact') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">Assistant</span>
                    </a>
                </li>

                <div class="mx-2 mt-3  font-semibold">
                    <h1>Recruitment</h1>
                </div>

                <li class="relative mt-0 p-1 list-none">
                    <a href="{{ route('caas.announcement') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">Pemgumuman</span>
                    </a>
                </li>
                <li class="relative mt-2 p-1 list-none">
                    <a href="{{ route('caas.schedule') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">Jadwal</span>
                    </a>
                </li>
                @if (auth()->guard('caas')->user()->status->isPass == 1 && auth()->guard('caas')->user()->status->stages->stagesName == 'Upgrading')
                <li class="relative mt-2 p-1 list-none">
                    <a href="{{ route('caas.role') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-green hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">Role</span>
                    </a>
                </li>
                @endif
                <li class="relative mt-2 p-1 list-none">
                    <a href="{{ route('caas.logout') }}" class="border-2 border-secondary hover:border-fivedary justify-center text-secondary bg-gray-dark flex w-[90%] h-9 rounded-full items-center no-underline shadow-md shadow-gray-dark hover:bg-transparent hover:shadow-merah hover:text-fivedary hover:font-semibold">
                        <span class="text-[12px] whitespace-nowrap">log out</span>
                    </a>
                </li>
            </div>
            </ul>
        </div>
    <!-- navbar end -->
</div>
<!-- header ends -->


<!-- profile start -->
<div class="container relative max-w-2xl mx-auto py-4">
    <div class="flex justify-center mt-4 ">
        <img src="{{ asset($path) }}" alt="Card Profile" class="image-caas px-4 h-[470px] w-[325px]">
        <div class="absolute top-0 left-0 max-w-[200px] mx-auto right-0 text-justify -mt-[75px] z-10">
            <div class="deskripsi text-tridary text-[13px] font-vinque mb-3">
                <p class="mb-2">
                    Nama: {{ ucwords(strtolower(auth()->guard('caas')->user()->name)) }}
                </p>
                <p class="mb-2">
                    NIM: {{ auth()->guard('caas')->user()->nim }}
                </p>
                <p class="mb-2">
                    Jurusan: {{ ucwords(strtolower(auth()->guard('caas')->user()->major)) }} 
                </p>
                <p class="mb-2">
                    Kelas: {{ auth()->guard('caas')->user()->class }}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- profiile ends deskripsi -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
