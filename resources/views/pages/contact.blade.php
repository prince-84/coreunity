@extends('layouts.app')

@section('title', ($page->meta_title ?? 'Contact Us | CoreUnity Solutions, Business Bay Dubai'))
@section('meta_description', ($page->meta_description ?? 'Contact CoreUnity Solutions, a Dubai digital marketing agency, for web development, SEO & branding services. Located in Business Bay, Dubai.'))

@section('content')
<div class="bg-black text-white relative flex flex-col font-sans min-h-screen overflow-hidden">
    
    @if(!isset($contactHero?->is_active) || $contactHero->is_active)
    <!-- Background Red Radial Glow for Hero -->
    <div 
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-5xl h-[600px] pointer-events-none z-0"
        style="background: radial-gradient(circle at top center, rgba(153, 17, 17, 0.35) 0%, transparent 65%); filter: blur(45px);">
    </div>

    <!-- Section 1: Contact Hero Section -->
    <main class="flex-1 flex flex-col items-center justify-center relative z-10 px-4 min-h-[50vh] md:min-h-[60vh] pt-32 pb-16 md:py-0">
        <div class="flex flex-col items-center text-center">
            
            <div class="flex items-center gap-3 mb-6">
                <div class="relative">
                    <div class="absolute inset-0 bg-[#c52833] blur-[4px] rounded-full scale-[2] opacity-70"></div>
                    <div class="w-2.5 h-2.5 bg-[#c52833] rounded-full relative z-10"></div>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold tracking-wide text-white">
                    {{ $contactHero?->mini_title ?? 'Contact Us' }}
                </h1>
            </div>
            
            <h2 class="text-center text-2xl md:text-[34px] lg:text-[40px] font-normal leading-snug text-gray-200 max-w-2xl mx-auto break-words">
                {!! nl2br(e($contactHero?->main_title ?? "Lets get in touch and build\nsomething great together")) !!}
            </h2>
            
        </div>
    </main>
    @endif

    @if(!isset($contactDetails?->is_active) || $contactDetails->is_active)
    <!-- Section 2: Contact Form & Info Section -->
    <section class="bg-white text-black py-16 md:py-20 px-4 sm:px-6 md:px-12 w-full relative z-20 -mt-10 md:-mt-20 overflow-hidden font-sans">
        <div class="max-w-[1200px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            
            <!-- Left Side: Text and Contact Info -->
            <div class="flex flex-col justify-center">
                <h2 class="text-[36px] sm:text-[40px] md:text-[50px] font-light text-[#1f1f1f] mb-4 tracking-tight leading-tight">
                    {{ $contactDetails?->title_prefix ?? 'Get' }} <span class="text-[#c52833] font-bold">{{ $contactDetails?->title_highlight ?? 'with' }}</span> {{ $contactDetails?->title_suffix ?? 'us' }}
                </h2>
                <p class="text-gray-500 text-[15px] md:text-[16px] leading-relaxed mb-8 md:mb-10 max-w-[500px]">
                    {{ $contactDetails?->description ?? "We'd love to hear from you! Our team is here to provide dedicated support, answer your questions, and help bring your next project to life. Feel free to reach out to us" }}
                </p>

                <div class="flex flex-col gap-5">
                    
                    <!-- Phone & Email Box -->
                    <div class="border border-gray-200 rounded-[20px] flex flex-col sm:flex-row items-center p-6 bg-[#fafafa] transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:border-red-200 cursor-pointer group gap-6 sm:gap-0">
                        <!-- Phone -->
                        <div class="flex-1 flex flex-col items-center justify-center text-center px-4 w-full">
                            <div class="w-8 h-8 mb-3 flex items-center justify-center">
                                <img src="{{ asset('phone_logo.png') }}" alt="Phone" class="w-full h-full object-contain" />
                            </div>
                            <h4 class="font-bold text-[#1f1f1f] text-[15px] mb-1">Phone Number</h4>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contactDetails?->phone ?? '+971505559646') }}" class="text-gray-400 hover:text-black transition-colors text-[13px]">
                                {{ $contactDetails?->phone ?? '+971 50 555 9646' }}
                            </a>
                        </div>
                        
                        <!-- Divider -->
                        <div class="hidden sm:block w-[1px] h-20 bg-gray-200 shrink-0"></div>
                        <div class="block sm:hidden w-full h-[1px] bg-gray-200"></div>
                        
                        <!-- Email -->
                        <div class="flex-1 flex flex-col items-center justify-center text-center px-4 w-full">
                            <div class="w-8 h-8 mb-3 flex items-center justify-center">
                                <img src="{{ asset('mail_logo.png') }}" alt="Email" class="w-full h-full object-contain" />
                            </div>
                            <h4 class="font-bold text-[#1f1f1f] text-[15px] mb-1">Email Address</h4>
                            <a href="mailto:{{ $contactDetails?->email ?? 'contact@coreunitysolutions.com' }}" class="text-gray-400 hover:text-black transition-colors text-[13px] break-all">
                                {{ $contactDetails?->email ?? 'contact@coreunitysolutions.com' }}
                            </a>
                        </div>
                    </div>

                    <!-- Address Box -->
                    <div class="border border-gray-200 rounded-[20px] flex items-center p-6 bg-[#fafafa] gap-5 sm:gap-6 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:border-red-200 cursor-pointer group">
                        <div class="w-10 h-10 shrink-0 ml-1 sm:ml-4 flex items-center justify-center">
                            <img src="{{ asset('loc_logo.png') }}" alt="Address" class="w-full h-full object-contain" />
                        </div>
                        <div class="flex flex-col">
                            <h4 class="font-bold text-[#1f1f1f] text-[15px] mb-1">Address</h4>
                            <p class="text-gray-400 text-[13px]">{{ $contactDetails?->address ?? 'Churchill Tower, Business Bay, Dubai, UAE' }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="bg-[#fafafa] border border-gray-200 rounded-[24px] p-6 sm:p-8 lg:p-10 shadow-sm w-full">
                
                <div id="contactSuccessState" class="hidden bg-emerald-50 border border-emerald-200 rounded-2xl p-8 text-center space-y-4">
                    <div class="w-14 h-14 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto text-2xl font-bold">✓</div>
                    <h3 class="text-2xl font-bold text-gray-900">Message Sent!</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Thank you for reaching out to CoreUnity Solutions. Our team will review your message and respond within 24 hours.
                    </p>
                </div>

                <form id="contactPageForm" action="{{ route('lead.submit') }}" method="POST" class="flex flex-col gap-4">
                    @csrf
                    <input type="hidden" name="form_type" value="Contact Us Page" />
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <input
                            type="text"
                            name="first_name"
                            required
                            placeholder="First Name*"
                            class="w-full sm:w-1/2 border border-gray-200 rounded-lg p-3.5 text-[14px] outline-none focus:border-gray-400 text-black placeholder:text-gray-400 bg-white"
                        />
                        <input
                            type="text"
                            name="last_name"
                            placeholder="Last Name"
                            class="w-full sm:w-1/2 border border-gray-200 rounded-lg p-3.5 text-[14px] outline-none focus:border-gray-400 text-black placeholder:text-gray-400 bg-white"
                        />
                    </div>

                    <input
                        type="text"
                        name="phone"
                        placeholder="Phone No"
                        class="w-full border border-gray-200 rounded-lg p-3.5 text-[14px] outline-none focus:border-gray-400 text-black placeholder:text-gray-400 bg-white"
                    />

                    <input
                        type="email"
                        name="email"
                        required
                        placeholder="E-mail*"
                        class="w-full border border-gray-200 rounded-lg p-3.5 text-[14px] outline-none focus:border-gray-400 text-black placeholder:text-gray-400 bg-white"
                    />

                    <textarea
                        name="message"
                        placeholder="Message (Optional)"
                        rows="5"
                        class="w-full border border-gray-200 rounded-lg p-3.5 text-[14px] outline-none focus:border-gray-400 text-black placeholder:text-gray-400 resize-none bg-white"
                    ></textarea>

                    <div id="contactErrorMsg" class="hidden text-xs text-red-600 bg-red-50 border border-red-200 p-3 rounded-lg text-center font-medium"></div>

                    <button
                        type="submit"
                        id="contactSubmitBtn"
                        class="w-full bg-[#c52833] hover:bg-[#a6222b] text-white font-semibold py-4 rounded-lg mt-2 transition-colors text-[15px] flex items-center justify-center gap-2 cursor-pointer shadow-md"
                    >
                        {{ $contactDetails?->submit_button_text ?? 'Submit Message' }}
                    </button>
                </form>

            </div>

        </div>
    </section>
    @endif

</div>
@endsection

@push('scripts')
<script>
    document.getElementById('contactPageForm')?.addEventListener('submit', async function(e) {
        e.preventDefault();
        const form = this;
        const btn = document.getElementById('contactSubmitBtn');
        const err = document.getElementById('contactErrorMsg');
        const successBox = document.getElementById('contactSuccessState');
        
        btn.disabled = true;
        btn.innerHTML = '<span class="inline-block animate-spin mr-2">⟳</span> Sending Message...';
        err.classList.add('hidden');

        try {
            const formData = new FormData(form);
            const firstName = formData.get('first_name') || '';
            const lastName = formData.get('last_name') || '';
            formData.set('name', (firstName + ' ' + lastName).trim() || 'Website Visitor');

            const res = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            });

            if (res.ok) {
                form.classList.add('hidden');
                successBox.classList.remove('hidden');
            } else {
                const data = await res.json().catch(() => ({}));
                err.textContent = data.message || 'Failed to send message. Please try again.';
                err.classList.remove('hidden');
                btn.disabled = false;
                btn.textContent = 'Submit Message';
            }
        } catch (ex) {
            // Standard form fallback
            form.submit();
        }
    });
</script>
@endpush
