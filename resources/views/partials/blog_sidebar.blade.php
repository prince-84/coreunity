<!-- Right Column: Sidebar -->
<div class="lg:col-span-1 space-y-8">
    
    <!-- Contact Card -->
    <div>
        <h4 class="font-bold text-[17px] mb-3 text-gray-900">Contact With Us Now !</h4>
        <div class="bg-[#f2f2f2] rounded-2xl p-6 shadow-sm border border-gray-100">
            <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 bg-white rounded-full overflow-hidden shrink-0 relative p-0.5 shadow-sm border border-gray-200 flex items-center justify-center">
                    <img src="{{ asset('Core Unity Logo-05.svg') }}" alt="CoreUnity Logo" class="w-full h-full object-contain" />
                </div>
                <div class="flex flex-col gap-1">
                    <h5 class="font-bold text-gray-900 text-[18px]">Customer Support</h5>
                    <div class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-black shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:+971505559646" class="text-[15px] text-gray-800 tracking-wide hover:text-black transition-colors">+971 50 555 9646</a>
                    </div>
                </div>
            </div>
            <div class="flex gap-3">
                <a href="tel:+971505559646" class="flex-1 bg-black text-white py-2 rounded-full text-sm font-medium hover:bg-gray-800 transition-colors text-center">
                    Call
                </a>
                <a href="https://wa.me/971505559646" target="_blank" rel="noopener noreferrer" class="flex-1 bg-[#d32f2f] text-white py-2 rounded-full text-sm font-medium hover:bg-red-700 transition-colors flex items-center justify-center gap-2">
                    <img src="{{ asset('whatsapp_logo.png') }}" alt="WhatsApp" width="16" height="16" class="w-4 h-4 object-contain" />
                    WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Airtel Case Study Card -->
    <div class="bg-[#f0f1f2] rounded-[32px] p-8 shadow-sm border border-gray-200/50 flex flex-col gap-6 text-center relative overflow-hidden">
        
        <!-- Airtel Logo Area -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-[28px] font-extrabold text-[#d32f2f] tracking-tighter uppercase font-sans">airtel</span>
            <span class="text-[10px] font-bold text-[#c52833] uppercase border border-[#c52833]/30 px-2.5 py-0.5 rounded-full tracking-wider">
                Case Study
            </span>
            <h4 class="text-xl font-bold text-gray-900 mt-2">My Airtel App</h4>
            <p class="text-xs text-gray-500 font-light">App Recharge and Easy Plan Renewal</p>
        </div>

        <!-- App store icons -->
        <div class="flex justify-center gap-2">
            <div class="bg-black text-white px-3 py-1.5 rounded flex items-center gap-1.5 cursor-pointer hover:bg-gray-900 transition-colors">
                <svg class="w-3.5 h-3.5 fill-current shrink-0" viewBox="0 0 24 24">
                    <path d="M18.71 19.5C17.88 20.74 17 21.95 15.66 21.97C14.32 22 13.89 21.18 12.37 21.18C10.84 21.18 10.37 21.95 9.1 22C7.79 22.05 6.8 20.68 5.96 19.47C4.25 17 2.94 12.45 4.7 9.39C5.57 7.87 7.13 6.91 8.82 6.88C10.1 6.86 11.32 7.75 12.11 7.75C12.89 7.75 14.37 6.68 15.92 6.84C16.57 6.87 18.39 7.1 19.56 8.82C19.47 8.88 17.39 10.1 17.41 12.63C17.44 15.65 20.06 16.66 20.1 16.67C20.08 16.74 19.67 18.11 18.71 19.5M15.97 4.17C16.63 3.37 17.07 2.28 16.95 1C16 1.04 14.9 1.6 14.24 2.38C13.68 3.04 13.19 4.14 13.34 5.39C14.39 5.47 15.4 4.88 15.97 4.17Z"/>
                </svg>
                <div class="text-left leading-none">
                    <p class="text-[7px] text-gray-400">Download on the</p>
                    <p class="text-[10px] font-bold">App Store</p>
                </div>
            </div>
            <div class="bg-black text-white px-3 py-1.5 rounded flex items-center gap-1.5 cursor-pointer hover:bg-gray-900 transition-colors">
                <svg class="w-3.5 h-3.5 fill-current shrink-0" viewBox="0 0 24 24">
                    <path d="M5,3L13.78,11.78L16.22,9.33L5,3M19.33,12L21,13.67L5,3V3.5L19.33,12M5,21V20.5L19.33,12L5,21M5,21L13.78,12.22L16.22,14.67L5,21Z"/>
                </svg>
                <div class="text-left leading-none">
                    <p class="text-[7px] text-gray-400">GET IT ON</p>
                    <p class="text-[10px] font-bold">Google Play</p>
                </div>
            </div>
        </div>

        <!-- Mockup phone with avatars -->
        <div class="relative w-full h-[260px] flex items-center justify-center mt-4">
            <!-- Red Wave background in container -->
            <div class="absolute inset-0 bg-red-600/10 rounded-2xl flex items-center justify-center overflow-hidden">
                <div class="w-[200px] h-[200px] bg-red-600 rounded-full blur-[80px] opacity-40"></div>
            </div>
            
            <!-- Phone Frame -->
            <div class="relative w-[130px] h-[250px] bg-black rounded-[24px] border-4 border-gray-800 shadow-2xl overflow-hidden z-10">
                <div class="w-full h-full bg-[#f8f9fa] p-2 flex flex-col justify-between text-left">
                    <div class="flex justify-between items-center text-[8px] font-bold text-gray-800 border-b pb-1">
                        <span>airtel</span>
                        <div class="w-2 h-2 rounded-full bg-red-500"></div>
                    </div>
                    <div class="my-2">
                        <p class="text-[8px] text-gray-500">Welcome</p>
                        <p class="text-[10px] font-extrabold text-gray-900 leading-tight">Abdullah Memon</p>
                    </div>
                    <div class="bg-red-50 p-1.5 rounded-lg border border-red-100 flex flex-col gap-0.5">
                        <span class="text-[6px] text-gray-500">Balance</span>
                        <span class="text-[11px] font-black text-[#d32f2f]">32.38 Tk</span>
                    </div>
                    <div class="bg-red-600 text-white rounded-md text-[8px] py-1 text-center font-bold shadow cursor-pointer mt-2">
                        Recharge Plan
                    </div>
                    <div class="w-12 h-1 bg-gray-400 rounded mx-auto mt-2"></div>
                </div>
            </div>

            <!-- Floating Avatars -->
            <div class="absolute top-[20%] left-[10%] w-9 h-9 rounded-full border border-red-600/30 p-0.5 z-20 bg-white shadow-md">
                <div class="w-full h-full rounded-full overflow-hidden relative">
                    <img src="{{ asset('Zeeshan_image.png') }}" alt="Avatar" class="w-full h-full object-cover" />
                </div>
            </div>
            <div class="absolute top-[10%] right-[10%] w-9 h-9 rounded-full border border-red-600/30 p-0.5 z-20 bg-white shadow-md">
                <div class="w-full h-full rounded-full overflow-hidden relative">
                    <img src="{{ asset('farazbhai_image.png') }}" alt="Avatar" class="w-full h-full object-cover" />
                </div>
            </div>
            <div class="absolute bottom-[20%] left-[8%] w-9 h-9 rounded-full border border-red-600/30 p-0.5 z-20 bg-white shadow-md">
                <div class="w-full h-full rounded-full overflow-hidden relative">
                    <img src="{{ asset('babar_image.png') }}" alt="Avatar" class="w-full h-full object-cover" />
                </div>
            </div>
            <div class="absolute bottom-[15%] right-[8%] w-9 h-9 rounded-full border border-red-600/30 p-0.5 z-20 bg-white shadow-md">
                <div class="w-full h-full rounded-full overflow-hidden relative">
                    <img src="{{ asset('osama_image.png') }}" alt="Avatar" class="w-full h-full object-cover" />
                </div>
            </div>
        </div>
    </div>

</div>
