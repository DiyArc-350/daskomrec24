<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DLOR 2024</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/landing/LogoDlor24.jpg') }}" />
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-hidden">
     <div class="desc-screen flex flex-wrap items-center justify-center w-screen h-screen bottom-0 top-0 left-0 right-0" onload="show()" onclick="hide()">
        <div class="text-center">
            <img src="{{ asset('/assets/caas/landing/dlor24.png') }}" alt="" class="text-center h-[530px] w-[400px] mt-auto">
            {{-- <p class="text-white text-xl text-opacity-50 tracking-wide font-enchanted animate-pulse mt-1 ">Click Anything To Continue</p> --}}
        </div>
    </div>

    <div class="main container mx-auto mb-4" >
        <div class="flex flex-row justify-between mt-2 mr-3 ml-3 xl:mt-4 xl:ml-6 xl:mr-6">
            <div class="mt-2 sm:mt-2 lg:mt-3 sm:ml-2 ">
                <a href="https://daskomlab.com/" target="_blank">
                    <img src="{{ asset('/assets/caas/landing/DASKOM_White1.png') }}" alt="DASKOM"  class="w-6"/>
                </a>
            </div>
            <div><img src="{{ asset('/assets/caas/landing/DLOR_2024.png') }}"  class="w-8"/></div>
        </div>
        <br>
        <div class=" text-title font-bold items-center text-center m-1 ">
          <p class="mb-4  text-4xl sm:text-4xl md:text-6xl font-ringbearer text-[#A37651] leading-normal">Finding The Precious Treasure</p>
        </div>
        {{-- <img class="mt-auto bottom-0 h-1/2" src="{{ asset($ss->photo) }}" alt=""> --}}


        <a id="loginbutton" onclick="toggleModal()" class="text-black text-xl lg:text-3xl font-ringbearer sm:text-xl md:text-3xl">
        <div class="static mt-[340px] sm:mt-[340px] bottom-1 flex items-center justify-center">
            <img src="{{ asset('/assets/caas/landing/loginbutton.png') }}" alt="" class="absolute w-1/4 lg:w-48 md:w-1/4">
            <div class="absolute text-center">
                    Start
                </div>
            </div>
        </a>
          <!-- //modal -->
        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal" >
            <div class="fixed inset-0 transition-opacity">,
            <div class="absolute inset-0 bg-gray-900 opacity-75">
            </div>
            <div class="flex flex-wrap absolute justify-center mt-[250px] right-0 left-0 z-50">
                <div class="flex flex-none justify-center items-center">
                    <div class="absolute ">
                        <div class="absolute top-[120px] text-start right-0 left-[35px]">
                            <a class="cursor-pointer" onclick="toggleModal()" >
                                <img class="w-8 rotate-90 drop-shadow-lg" src="{{ asset('/assets/caas/caas/close.png') }}" alt="">
                            </a>
                        </div>
                        <img class="mt-[80px]" src="{{ asset('/assets/caas/caas/loginpaper.png') }}" alt="">
                        <div class="fixed text-center left-0 top-[130px] right-0">
                            <form action="https://google.com" method="get">
                                <h1 class="text-black font-bold text-3xl font-ringbearer -mb-16">Welcome<br>Adventurer</h1>
                                <form class="flex flex-col justify-around items-center h-3/5" action="/loginCaasPost/3"
                                    method="POST">
                                    <div class="flex flex-col items-center justify-between font-ringbearer h-60 font-bold">
                                        <input type="text" placeholder="Enter Your NIM" name="nim" id="nim"
                                            class="mt-32 w-60 h-16 text-[#514D4D] border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-gray-500 transition-all duration-300 ease-in-out"
                                            required />
    
                                        <input type="text" placeholder="Enter Your Password" name="password" id="password"
                                            class="mt-16 w-60 h-16 text-[#514D4D] border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-gray-500 transition-all duration-300 ease-in-out"
                                            required />
    
                                        <button type="submit"
                                            class="mt-14 w-44 h-28 shadow-semi-sm active:shadow-in-semi-sm active:shadow-bright-sun duration-200">
                                            <h1
                                                class="font-ringbearer font-bold flex justify-center items-center text-center text-lg h-[48px]">
                                                L O G I N
                                            </h1>
                                        </button>
                                    </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> 
    
    <footer class="fixed bottom-0 left-0 right-0 mb-1 text-center">
        <h1 class="font-bold text-xl font-ringbearer text-[#A37651] text-stroke shadow-secondary shadow-lg sm:text-xl lg:text-xl">#Venture The Deep Within
    </footer>
    <script src="{{ asset('js/welcoming.js') }}"></script>
</body>
</html>