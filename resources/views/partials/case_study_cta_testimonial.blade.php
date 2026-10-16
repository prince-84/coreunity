<!-- CTA Banner (Full Width) -->
<div class="w-full bg-[#c52833] h-auto md:h-[170px] py-8 md:py-0 px-6 sm:px-12 md:px-20 flex flex-col md:flex-row items-center justify-between gap-6 shadow-2xl relative overflow-hidden z-20 transition-transform duration-300 hover:scale-[1.01] cursor-pointer">
    <!-- Subtle gradient overlay for depth -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/10 to-transparent pointer-events-none"></div>
    
    <div class="text-white text-center md:text-left relative z-10 flex flex-col md:flex-row md:items-center gap-2 md:gap-6">
        <h2 class="text-3xl md:text-[34px] font-bold tracking-tight">Ready to grow your brand?</h2>
        <p class="text-white/90 text-[18px] font-light mt-1 md:mt-0">Let's build a strategy that delivers real results.</p>
    </div>
    
    <a href="{{ url('/contact') }}" class="bg-white text-[#c52833] px-10 py-3.5 rounded-xl font-bold hover:bg-gray-50 transition-colors shadow-lg flex items-center gap-2 relative z-10 whitespace-nowrap text-[16px] no-underline">
        Contact with us <span class="text-2xl leading-none">&rarr;</span>
    </a>
</div>

@include('partials.testimonial_light')
