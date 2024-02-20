<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Venture the Deep Within</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="DLOR" href="{{ asset('/assets/caas/homepage/LogoDlor24.jpg') }}" />
</head>
<body class="bg-welcome-dungeon bg-cover bg-fixed bg-no-repeat bg-center cursor-sword overflow-hidden">
    <!-- desc DLOR 2024 start -->
    <div class="desc-screen flex flex-wrap items-center justify-center w-screen h-screen bottom-1 left-0 right-0" onload="show()" onclick="hide()">
        <div class="text-center absolute overflow-hidden">
            <img src="{{ asset('/assets/caas/homepage/paperdescdlor24.png') }}" alt="" class="h-[530px] w-[400px]">
            <div id="descdlor24"
                class="absolute text-start text-lg font-vinque top-1/4 left-1/4 transform -translate-x-1/4 -translate-y-1/4 text-black bottom-0 w-full h-full pt-8 pb-12 pl-12 pr-11">
                <h3 id="h3-text"
                    class="absolute text-center text-[21px] bottom-[58px] left-1/2 transform -translate-x-1/2 -translate-y-20 text-black opacity-0">
                    <span id="h3-part1" class="h3-part1 font-ringbearer">Fight For Glory</span><br>
                    <span id="h3-part2" class="h3-part2 font-ringbearer">Create Your Story</span>
                </h3>
            </div>
            <img src="{{ asset('/assets/caas/homepage/stamp.png') }}" alt=""
                class="absolute bottom-[52px] right-[42px] stamp h-[90px] w-auto opacity-0">
            <p class="text-white text-xl text-opacity-50 tracking-wide font-enchanted animate-pulse mt-1">Click Anything
                To Continue</p>
        </div>
    </div>
    <!-- desc DLOR 2024 end -->

    <!-- homepage start -->
    <div class="main container mx-auto my-auto mb-4">
        <div class="flex flex-row justify-between mt-0 mr-3 ml-3 xl:mt-4 xl:ml-6 xl:mr-6">
            <div class="">
                <a href="https://daskomlab.com/" target="_blank">
                    <img src="{{ asset('/assets/caas/homepage/DASKOM_White.svg') }}" alt="DASKOM" class="mt-4 ml-3 w-10 sm:w-8 lg:w-12"/>
                </a>
            </div>
            <div>
                <img src="{{ asset('/assets/caas/homepage/DLOR_2024.svg') }}" class="mt-1.5 ml-3 w-10 sm:w-8 lg:w-12"/>
            </div>
        </div>
        <br>
        <div class=" text-title font-bold items-center text-center my-1 mx-3">
            <p class="mb-4  text-4xl sm:text-4xl md:text-6xl font-ringbearer text-[#A37651] leading-normal">Finding The Precious Treasure</p>
        </div>
        <a id="loginbutton" onclick="toggleModal()" class="text-black text-xl lg:text-3xl font-ringbearer sm:text-xl md:text-3xl">
        <div class="static mt-[340px] sm:mt-[340px] bottom-1 flex items-center justify-center">
            <img src="{{ asset('/assets/caas/homepage/loginbutton.png') }}" alt="" class="absolute w-1/4 lg:w-48 md:w-1/4">
            <div class="absolute text-center">
                Start
            </div>
        </div> 
        </a>
        
        <!-- //modal -->
        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 hidden" id="modal">
            <div class="fixed inset-0 transition-opacity">,
                <div class="absolute inset-0 bg-gray-900 opacity-75">
                </div>
                <div class="flex flex-wrap absolute justify-center mt-[250px] right-0 left-0 z-50">
                    <div class="flex flex-none justify-center items-center">
                        <div class="absolute ">
                            <div class="absolute top-[120px] text-start right-0 left-[35px]">
                                <a class="cursor-pointer" onclick="toggleModal()">
                                    <img class="w-8 rotate-90 drop-shadow-lg" src="{{ asset('/assets/caas/caas/close.png') }}" alt="">
                                </a>
                            </div>
                            <img class="mt-[80px] " src="{{ asset('/assets/caas/caas/loginpaper.png') }}" alt="">
                            <div class="fixed text-center left-0 top-[130px] right-0">
                                <h1 class="text-black font-bold text-3xl font-ringbearer -mb-16">Welcome<br>Adventurer</h1>
                                <form class="flex flex-col justify-around items-center h-3/5"  method="POST" action="{{ route('caas.login.check') }}">
                                     {{ csrf_field() }}
                                    <div class="flex flex-col items-center justify-between font-vinque h-60 font-bold">
                                        <input type="text" placeholder="Enter Your NIM" name="nim"
                                            class="mt-32 w-60 h-16 text-[#514D4D] border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-gray-500 transition-all duration-300 ease-in-out"
                                            required />
                                
                                        <input placeholder="Enter Your Password" name="password" type="password" 
                                            class="mt-16 w-60 h-16 text-[#514D4D] border-b-gray-700 border-b-2 bg-transparent focus:outline-none invalid:border-b-gray-500 text-sm text-center placeholder:text-gray-500 transition-all duration-300 ease-in-out"
                                            required />
                                
                                        <button type="submit"
                                            class="mt-14 w-44 h-28 shadow-semi-sm active:shadow-in-semi-sm active:shadow-bright-sun duration-200">
                                            <h1 class="font-ringbearer font-bold flex justify-center items-center text-center text-lg h-[48px]">
                                                L O G I N
                                            </h1>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> 

    <!-- footer start -->
    <footer class="fixed bottom-0 left-0 right-0 mt-3 mb-3 text-center">
        <h1 class="lg:text-[20px] font-ringbearer text-[#A37651] text-stroke sm:text-[15px] md:text-[15px]">#Venture The Deep Within
    </footer>
    <!-- footer end -->

    <!-- homepage end -->
    {{-- <script src="{{ asset('js/welcoming.js') }}"></script>c --}}
    <script>
        function show() {
    document.querySelector(".desc-screen").style.display = "block";
    document.querySelector(".main").style.display = "none";
}

function hide() {
    document.querySelector(".desc-screen").style.display = "none";
    document.querySelector(".main").style.display = "block";
}

function toggleModal() { 
    document.getElementById('modal').classList.toggle('hidden')
}

function startAnimation() {
  anime.timeline({loop: false})
  .add({
    targets: '.h3-part1, .h3-part2, .stamp',
    scale: [7,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 900,
    delay: (el, i) => 1600 * i
  })
  .add({
    targets: '#h3-text, #stamp',
    opacity: 1,
    duration: 900,
    easing: "easeOutExpo",
    delay: 1600
  });
}
  
document.addEventListener('DOMContentLoaded', function() {
  var i = 0;
  var txt = 'From the sea to the highest mountain, we strive towards the same goal. Heed the warning, Adventurer, No preparation is too long. Use every skill you have learned, every experience you have. For no obstacle would come without consequences. Push through, Adventurer, for no matter how dangerous the dungeons are, there is light at the end of it all.';
  var speed = 50;
  
  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("descdlor24").innerHTML += txt.charAt(i);
      document.getElementById("descdlor24").style.textAlign = "justify";
    
      i++;
      setTimeout(typeWriter, speed);
    } 
    else {
      // The typewriter has completed, now display the <h3>
      setTimeout(function() {
        document.getElementById("h3-text").classList.add('opacity-100');
        startAnimation();
      }, 1000);
    }
  }
  typeWriter();
}); 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>
</html>