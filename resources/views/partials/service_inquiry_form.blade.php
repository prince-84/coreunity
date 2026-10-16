@php
    $formPageName = $pageName ?? 'Digital Marketing';
@endphp

<div class="bg-[#1f1f1f] border-2 border-white rounded-3xl p-6 sm:p-8 md:p-10 w-full max-w-[480px]">
    <h3 class="text-xl sm:text-2xl font-bold text-white mb-2">Have any questions?</h3>
    <p class="text-sm text-gray-400 mb-8 font-light">or tell us about your upcoming project.</p>

    @if(session('success'))
        <div class="bg-emerald-500/10 border border-emerald-500/30 rounded-2xl p-6 text-center space-y-3">
            <svg class="w-12 h-12 text-emerald-400 mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <path d="m9 12 2 2 4-4"/>
            </svg>
            <h4 class="text-lg font-bold text-white">Message Received!</h4>
            <p class="text-xs text-gray-300">
                Thank you for reaching out. Our experts for <span class="text-red-400 font-semibold">{{ $formPageName }}</span> will get back to you within 24 hours.
            </p>
        </div>
    @else
        <form action="{{ route('lead.submit') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <input type="hidden" name="service" value="{{ $formPageName }}">
            
            <div class="flex flex-col gap-1.5">
                <label for="name-{{ \Illuminate\Support\Str::slug($formPageName) }}" class="text-[11px] text-gray-300 ml-1 font-medium">Name*</label>
                <input
                    id="name-{{ \Illuminate\Support\Str::slug($formPageName) }}"
                    name="name"
                    type="text"
                    required
                    placeholder="John Doe"
                    class="bg-white text-black px-4 py-3 rounded-lg text-sm w-full outline-none placeholder:text-gray-400"
                />
            </div>

            <div class="flex flex-col gap-1.5">
                <label for="email-{{ \Illuminate\Support\Str::slug($formPageName) }}" class="text-[11px] text-gray-300 ml-1 font-medium">Email*</label>
                <input
                    id="email-{{ \Illuminate\Support\Str::slug($formPageName) }}"
                    name="email"
                    type="email"
                    required
                    placeholder="hello@gmail.com"
                    class="bg-white text-black px-4 py-3 rounded-lg text-sm w-full outline-none placeholder:text-gray-400"
                />
            </div>

            <div class="flex flex-col gap-1.5">
                <label for="phone-{{ \Illuminate\Support\Str::slug($formPageName) }}" class="text-[11px] text-gray-300 ml-1 font-medium">Phone No*</label>
                <div class="bg-white rounded-lg h-[46px] w-full flex items-center border border-gray-200 focus-within:border-[#cc2936] transition-colors">
                    <div class="flex items-center gap-1.5 pl-3 pr-1 h-full shrink-0">
                        <!-- UAE Flag -->
                        <svg class="w-5 h-3.5 rounded-[2px] overflow-hidden shadow-xs shrink-0" viewBox="0 0 640 480">
                            <path fill="#00732f" d="M0 0h640v160H0z"/>
                            <path fill="#fff" d="M0 160h640v160H0z"/>
                            <path fill="#000" d="M0 320h640v160H0z"/>
                            <path fill="red" d="M0 0h160v480H0z"/>
                        </svg>
                        <!-- Country Dial Code Dropdown Indicator -->
                        <svg class="w-2.5 h-2.5 text-gray-500 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                        <span class="text-sm text-black font-normal ml-0.5 shrink-0">+971</span>
                    </div>
                    <input 
                        type="tel" 
                        id="phone-{{ \Illuminate\Support\Str::slug($formPageName) }}" 
                        name="phone" 
                        required 
                        class="text-black pl-1.5 pr-4 py-3 text-sm w-full min-w-0 outline-none bg-transparent"
                    />
                </div>
            </div>

            <div class="flex flex-col gap-1.5">
                <label for="msg-{{ \Illuminate\Support\Str::slug($formPageName) }}" class="text-[11px] text-gray-300 ml-1 font-medium">Tell us about your project (Optional)</label>
                <textarea
                    id="msg-{{ \Illuminate\Support\Str::slug($formPageName) }}"
                    name="message"
                    rows="3"
                    placeholder="Describe your goals, timeline, or requirements..."
                    class="bg-white text-black px-4 py-3 rounded-lg text-sm w-full outline-none resize-none placeholder:text-gray-400"
                ></textarea>
            </div>

            <button
                type="submit"
                class="w-full bg-[#cc2936] hover:bg-red-700 text-white font-bold tracking-[0.2em] text-sm py-4 rounded-lg mt-3 transition-colors shadow-lg flex items-center justify-center gap-2 cursor-pointer"
            >
                SUBMIT
            </button>
        </form>
    @endif
</div>
