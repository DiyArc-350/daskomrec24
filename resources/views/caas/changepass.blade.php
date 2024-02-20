<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/homepage/LogoDlor24.jpg') }}" />
    <title>{{ $title }}</title>
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-y-auto">
<!-- header start -->
<div class="container flex justify-between">
    @include('caas.partials.sidebar')
</div>
<!-- header ends -->

 <!-- changepass start -->
<div class="container relative max-w-2xl mx-auto py-4">
    <div class="mt-[107px] flex justify-center">
        <img src="{{ asset('/assets/caas/caas/loginpaper.png') }}" alt="" class="h-[530px] w-[400px]">
    </div>
    <div class="absolute -top-0 left-0 right-0 text-center mt-[200px] z-10">
        <div class="text-dark font-ringbearer -mb-16">
            <h1 class="text-2xl">CHANGE PASSWORD</h1>
            <P class="text-sm">Password Minimal 8 Karakter</P>
        </div>
        <form class="flex flex-col justify-around items-center h-3/5" action="{{ route('caas.changepass.check') }}" method="POST">
            @csrf
            <div class="flex flex-col items-center justify-between font-vinque h-60 font-bold">
                <input type="password" placeholder="Old Password" name="old_password" id="old_password" value="{{ old('old_password') }}" class="mt-36 w-60 h-16 text-graymid border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-slate-200 transition-all duration-300 ease-in-out" required/>  
                @error('old_password')
                    <div class="alert alert-danger mt-2 text-xs text-red-700">{{ $message }}</div>
                @enderror
                <input type="password" placeholder="New Password" name="password" id="password" value="{{ old('password') }}" class="mt-16 w-60 h-16 text-graymid border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-slate-200 transition-all duration-300 ease-in-out" required/>
                @error('password')
                    <div class="alert alert-danger mt-2 text-xs text-red-700">{{ $message }}</div>
                @enderror
                <button type="submit" class="mt-14 w-44 h-28 rounded shadow-semi-sm active:shadow-in-semi-sm active:shadow-bright-sun duration-200">
                    <h1 class="font-ringbearer flex justify-center items-center text-center text-lg h-[48px]">Change Password</h1>
                </button>
            </div>
        </form>
    </div> 
</div>
<!-- changepass end -->

@include('caas.partials.footer')


<!-- script sidebar -->
<script src="{{ asset('js/sidebar.js') }}"></script>
<script>
// Script For Close alert
  var alert_del = document.querySelectorAll('.alert-del');
  alert_del.forEach((x) =>
    x.addEventListener('click', function () {
      x.parentElement.classList.add('hidden');
    })
  );
</script>
</body>
</html>
