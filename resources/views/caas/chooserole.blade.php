<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/homepage/LogoDlor24.jpg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" />
    <title>{{ $title }}</title>
</head>
<body class="bg-play-dungeon bg-cover font-ringbearer bg-fixed bg-no-repeat bg-center cursor-sword overflow-y-auto scrollbar-thin overflow-x-hidden">
    
<!-- header start -->
<div class="container flex justify-between">
    @include('caas.partials.sidebar')
</div>
<!-- header ends -->

 <!-- assistantcontact start -->
<div class="container mx-auto max-w-5xl mt-8 mb-4">
    <div class="text-title items-center text-center m-1">
        <h1 class="font-bold text-[30px] font-ringbearer text-fourdary">Choose Role</h1>
        <h4 class="font-bold text-[30px] font-ringbearer text-fourdary">dlor 2024</h4>
    </div>
    <div class="owl-carousel owl-theme justify-evenly mx-auto top-[50px] custom-card">
        @foreach ($roles as $r)
        <div class="items-center justify-center">
            <div class="relative">
                <img src="{{ asset($r->profilepic)}}" alt="{{ $r->roleName }}" class="h-[663px] w-[500px] object-cover">
                <div class="absolute text-end text-quota choose-role left-0">
                    <span class="h-auto w-1/3 z-10">Quota : {{ $r->quota }}</span>
                </div>
                <div class="fixed choose-role bottom-0 text-center left-0 right-0">
                    <form action="{{ route('caas.select.role') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $r->id }}">
                        <button type="submit" class="drop-shadow-2xl shadow-inner h-10 w-1/2 text-lg font-bold bg-[#D2C2B4] mb-0 hover:bg-[#f8e6d4]">P I L I H</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach  
        
    </div>
</div>
<div class="flex justify-center mt-[80px]">
    <button class="owl-prev text-fourdary hover:text-white focus:outline-none rounded-full p-2.5 text-center inline-flex items-center hover:bg-fourdary mr-3" type="button">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
    </button>
    <button class="owl-next text-fourdary hover:text-white focus:outline-none rounded-full p-2.5 text-center inline-flex items-center hover:bg-fourdary" type="button">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
    </button>
</div>
<!-- assistantcontact end -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/sliderassistant.js') }}"></script>
<script src="{{ asset('js/sidebar.js') }}"></script>
</body>
</html>
