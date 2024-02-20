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