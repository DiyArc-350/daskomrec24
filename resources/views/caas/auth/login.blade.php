<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | DLOR 2024</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/landing/LogoDlor24.jpg') }}" />
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword">
<div class="container relative max-w-2xl mx-auto py-1">
    <div class="mt-[50px] flex justify-center">
        <img src="{{ asset('/assets/caas/caas/loginpaper.png') }}" alt="" class="h-[460px] w-[350px]">
    </div>
    <div class="absolute top-0 left-0 right-0 text-center mt-[120px] z-10">
        <div class="text-black font-ringbearer -mb-16">
            <h1 class="text-[28px]">Welcome <br>Adventurer</h1> 
        </div>
        <form class="flex flex-col justify-around items-center h-3/5" action="{{ route('caas.login.check') }}" method="POST">
            @csrf            
            <div class="flex flex-col items-center justify-between font-vinque h-60 font-bold">
                <input type="text" placeholder="enter your nim" name="nim" id="nim" value="{{ old('nim') }}" class="mt-[108px] w-60 h-16 text-graymid border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-[#514D4D] transition-all duration-300 ease-in-out" required/>  
                @error('nim')
                <div class="alert alert-danger mt-2 text-red-600 text-[11px] text-center justify-center">
                    {{ $message }}
                </div>
                @enderror

                <input type="password" placeholder="password" name="password" id="password" value="{{ old('password') }}"  class="mt-[48px] w-60 h-16 text-graymid border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-[#514D4D] transition-all duration-300 ease-in-out" required/>
                @error('password')
                <div class="alert alert-danger mt-2 text-red-600 text-[11px] text-center justify-center">
                    {{ $message }}
                </div>
                @enderror

                <button type="submit" class="mt-7 w-44 h-28 rounded shadow-semi-sm active:shadow-in-semi-sm active:shadow-bright-sun duration-200">
                    <h1 class="font-ringbearer flex justify-center items-center text-center text-lg h-[45px]">l o g i n</h1>
                </button>
            </div>
        </form>
    </div> 
</div>
    @include('caas.partials.footer')
</body>
</html>