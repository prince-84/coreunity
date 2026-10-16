<!-- Speak to an Expert / Consult an Expert Modal -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.0/build/css/intlTelInput.min.css">
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.0/build/js/intlTelInput.min.js"></script>

<div id="speakExpertModal" class="hidden fixed inset-0 z-[9999] overflow-y-auto overscroll-contain">
    <!-- Backdrop -->
    <div 
        class="fixed inset-0 bg-black/95 backdrop-blur-xl transition-opacity duration-300 animate-fade-in"
        onclick="closeExpertModal()"
    ></div>

    <!-- Centering / Scrollable flex wrapper -->
    <div class="min-h-full flex justify-center items-center p-3 sm:p-4 py-6 sm:py-10 pointer-events-none" onclick="if(event.target === this) closeExpertModal()">
        <!-- Modal Container -->
        <div class="relative bg-white border border-zinc-200 rounded-2xl sm:rounded-3xl p-5 sm:p-8 max-w-lg w-full shadow-[0_20px_60px_rgba(0,0,0,0.3)] z-10 overflow-visible animate-scale-up font-sans my-auto pointer-events-auto">
            <!-- Top brand red strip -->
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-red-600 to-rose-700 rounded-t-2xl sm:rounded-t-3xl"></div>

            <!-- Close button -->
            <button 
                type="button" 
                onclick="closeExpertModal()"
                class="absolute top-3.5 right-3.5 sm:top-4 sm:right-4 text-zinc-500 hover:text-zinc-900 hover:bg-zinc-100 border border-zinc-200 p-1.5 sm:p-2 rounded-full transition-colors cursor-pointer z-20"
                aria-label="Close modal"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Header -->
            <div class="mb-4 sm:mb-6 pr-8 sm:pr-0">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-rose-50 border border-rose-200/50 rounded-full text-[11px] font-semibold text-red-600 uppercase tracking-wider mb-2 sm:mb-3">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/>
                        <path d="M12 8v4"/>
                        <path d="M12 16h.01"/>
                    </svg>
                    Speak to an Expert
                </div>
                <h3 class="text-xl sm:text-2xl font-bold text-zinc-900 tracking-tight">Consult an Expert</h3>
                <p class="text-zinc-500 text-xs sm:text-sm mt-1">Get strategic guidance from our digital agency specialists.</p>
            </div>

            <!-- Booking Form -->
            <form id="speakExpertForm" action="{{ url('/lead') }}" method="POST" onsubmit="handleExpertSubmit(event)" class="space-y-3 sm:space-y-4">
                @csrf
                <input type="hidden" name="form_type" value="Consult an Expert">
                <input type="hidden" name="country_iso" id="expert-country-iso" value="AE">
                <input type="hidden" name="country_dial_code" id="expert-country-dial-code" value="+971">
                <input type="hidden" name="full_phone" id="expert-full-phone" value="">

                <!-- Name -->
                <div>
                    <label for="expert-name" class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Your Name *</label>
                    <div class="relative">
                        <svg class="absolute left-3.5 top-3 sm:top-3.5 w-4 h-4 text-zinc-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <input 
                            id="expert-name"
                            name="name"
                            type="text" 
                            required 
                            class="w-full bg-zinc-50 border border-zinc-200 rounded-xl pl-11 pr-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all duration-200 placeholder-zinc-400"
                            placeholder="e.g. Jane Doe"
                        />
                    </div>
                </div>

                <!-- Email & Phone with International Country Flag -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    <div>
                        <label for="expert-email" class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Email Address *</label>
                        <div class="relative">
                            <svg class="absolute left-3.5 top-3 sm:top-3.5 w-4 h-4 text-zinc-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2"/>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                            </svg>
                            <input 
                                id="expert-email"
                                name="email"
                                type="email" 
                                required 
                                class="w-full bg-zinc-50 border border-zinc-200 rounded-xl pl-11 pr-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all duration-200 placeholder-zinc-400"
                                placeholder="name@company.com"
                            />
                        </div>
                    </div>

                    <div>
                        <label for="expert-phone" class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Phone Number *</label>
                        <div class="w-full">
                            <input 
                                id="expert-phone"
                                type="tel" 
                                name="phone"
                                required 
                                class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all duration-200"
                                placeholder="50 123 4567"
                            />
                        </div>
                    </div>
                </div>

                <!-- Topic & Preference -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">
                    <div>
                        <label for="expert-specialist" class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Consultation Topic *</label>
                        <div class="relative">
                            <select 
                                id="expert-specialist"
                                name="specialist"
                                required
                                onchange="this.classList.remove('text-zinc-400'); this.classList.add('text-zinc-900')"
                                class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all duration-200 appearance-none cursor-pointer text-zinc-400"
                            >
                                <option value="" disabled selected>Select a topic</option>
                                <option value="Technical Architecture" class="bg-white text-zinc-900">Technical Architecture</option>
                                <option value="Product Strategy" class="bg-white text-zinc-900">Product Strategy</option>
                                <option value="Creative UI/UX Design" class="bg-white text-zinc-900">Creative UI/UX Design</option>
                                <option value="Growth & Marketing" class="bg-white text-zinc-900">Growth & Marketing</option>
                                <option value="Mobile App Engineering" class="bg-white text-zinc-900">Mobile App Engineering</option>
                                <option value="SEO & Performance" class="bg-white text-zinc-900">SEO & Performance</option>
                            </select>
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-zinc-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="expert-method" class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Contact Preference *</label>
                        <div class="relative">
                            <select 
                                id="expert-method"
                                name="contact_method"
                                required
                                onchange="this.classList.remove('text-zinc-400'); this.classList.add('text-zinc-900')"
                                class="w-full bg-zinc-50 border border-zinc-200 rounded-xl px-4 py-2.5 sm:py-3 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all duration-200 appearance-none cursor-pointer text-zinc-400"
                            >
                                <option value="" disabled selected class="text-zinc-400">Select an option</option>
                                <option value="email" class="bg-white text-zinc-900">📧 Email Response</option>
                                <option value="whatsapp" class="bg-white text-zinc-900">💬 WhatsApp Message</option>
                                <option value="call" class="bg-white text-zinc-900">📞 Phone Call</option>
                            </select>
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-zinc-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Core Question / Project Brief -->
                <div>
                    <label for="expert-question" class="block text-[11px] sm:text-xs font-semibold text-zinc-600 uppercase tracking-wider mb-1 sm:mb-1.5">Project Brief / Core Question</label>
                    <div class="relative">
                        <svg class="absolute left-3.5 top-3 sm:top-3.5 w-4 h-4 text-zinc-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                        <textarea 
                            id="expert-question"
                            name="question"
                            rows="2" 
                            class="w-full bg-zinc-50 border border-zinc-200 rounded-xl pl-11 pr-4 py-2.5 sm:py-3 text-zinc-900 text-sm focus:outline-none focus:border-red-600/80 focus:ring-1 focus:ring-red-600/25 transition-all duration-200 resize-none placeholder-zinc-400 sm:rows-3"
                            placeholder="Tell us about your upcoming project goals, timeline, or requirements..."
                        ></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    id="expertSubmitBtn"
                    class="w-full flex items-center justify-center py-3 sm:py-3.5 text-white font-semibold rounded-xl transition-all duration-300 shadow-lg cursor-pointer bg-red-600 hover:bg-red-700 active:scale-[0.98] shadow-red-950/20 text-sm"
                >
                    Request Consultation
                </button>
            </form>
        </div>
    </div>

    <style>
        @keyframes modalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes modalScaleUp {
            from { opacity: 0; transform: scale(0.95) translateY(10px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        .animate-fade-in {
            animation: modalFadeIn 0.2s ease-out forwards;
        }
        .animate-scale-up {
            animation: modalScaleUp 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }

        /* Intl-tel-input styling overrides */
        .iti {
            width: 100% !important;
            display: block !important;
        }
        .iti__selected-country {
            padding: 0 8px 0 12px !important;
            background: transparent !important;
            border-radius: 0.75rem 0 0 0.75rem !important;
        }
        .iti__selected-dial-code {
            font-size: 0.875rem !important;
            color: #18181b !important;
            font-weight: 500 !important;
            margin-left: 6px !important;
        }
        .iti input#expert-phone {
            width: 100% !important;
            background-color: #fafafa !important;
            border: 1px solid #e4e4e7 !important;
            border-radius: 0.75rem !important;
            padding-top: 0.625rem !important;
            padding-bottom: 0.625rem !important;
            color: #18181b !important;
            font-size: 0.875rem !important;
            transition: all 0.2s ease !important;
        }
        .iti input#expert-phone:focus {
            outline: none !important;
            border-color: rgba(220, 38, 38, 0.8) !important;
            box-shadow: 0 0 0 2px rgba(220, 38, 38, 0.2) !important;
            background-color: #ffffff !important;
        }
        .iti__dropdown-content {
            background-color: #ffffff !important;
            color: #18181b !important;
            border: 1px solid #e4e4e7 !important;
            border-radius: 0.75rem !important;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
            z-index: 99999 !important;
            max-height: 220px !important;
        }
        .iti__search-input {
            background-color: #f4f4f5 !important;
            border: 1px solid #e4e4e7 !important;
            border-radius: 0.5rem !important;
            color: #18181b !important;
            padding: 6px 10px !important;
            font-size: 0.8125rem !important;
            margin: 6px !important;
            width: calc(100% - 12px) !important;
            outline: none !important;
        }
        .iti__country {
            padding: 6px 10px !important;
            font-size: 0.8125rem !important;
            color: #18181b !important;
        }
        .iti__country:hover, .iti__country.iti__highlight {
            background-color: #fee2e2 !important;
            color: #991b1b !important;
        }
    </style>
</div>

<script>
    let itiExpertInstance = null;

    function initExpertPhone() {
        const phoneInput = document.getElementById('expert-phone');
        if (!phoneInput) return;
        if (itiExpertInstance) return;

        if (typeof window.intlTelInput !== 'function') {
            // Retry after script load
            setTimeout(initExpertPhone, 100);
            return;
        }

        itiExpertInstance = window.intlTelInput(phoneInput, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                const cached = sessionStorage.getItem('user_geo_country');
                if (cached) {
                    callback(cached);
                    return;
                }

                const controller = new AbortController();
                const timer = setTimeout(() => controller.abort(), 2000);

                fetch("https://ipapi.co/json/", { signal: controller.signal })
                    .then(res => res.json())
                    .then(data => {
                        clearTimeout(timer);
                        const code = (data && data.country_code) ? data.country_code.toLowerCase() : "ae";
                        sessionStorage.setItem('user_geo_country', code);
                        callback(code);
                    })
                    .catch(() => {
                        clearTimeout(timer);
                        callback("ae"); // Default fallback: UAE (+971)
                    });
            },
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.5.0/build/js/utils.js",
            preferredCountries: ["ae", "pk", "sa", "us", "gb", "in", "ca", "qa", "kw", "bh", "om"],
        });

        const syncPhoneData = function() {
            if (!itiExpertInstance) return;
            const countryData = itiExpertInstance.getSelectedCountryData();
            const fullNumber = itiExpertInstance.getNumber();

            const isoField = document.getElementById('expert-country-iso');
            const dialCodeField = document.getElementById('expert-country-dial-code');
            const fullPhoneField = document.getElementById('expert-full-phone');

            if (isoField && countryData.iso2) {
                isoField.value = countryData.iso2.toUpperCase();
            }
            if (dialCodeField && countryData.dialCode) {
                dialCodeField.value = '+' + countryData.dialCode;
            }
            if (fullPhoneField) {
                fullPhoneField.value = fullNumber || phoneInput.value;
            }
        };

        phoneInput.addEventListener('countrychange', syncPhoneData);
        phoneInput.addEventListener('input', syncPhoneData);
        phoneInput.addEventListener('blur', syncPhoneData);
    }

    function openExpertModal() {
        const m = document.getElementById('speakExpertModal');
        if (m) {
            m.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            m.scrollTop = 0;
            initExpertPhone();
        }
    }

    function closeExpertModal() {
        const m = document.getElementById('speakExpertModal');
        if (m) {
            m.classList.add('hidden');
            document.body.style.overflow = 'unset';
        }
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeExpertModal();
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        initExpertPhone();
    });

    async function handleExpertSubmit(e) {
        e.preventDefault();
        const form = document.getElementById('speakExpertForm');
        const btn = document.getElementById('expertSubmitBtn');
        if (!form || !btn) return;

        // Ensure full phone number and country code are synced
        if (itiExpertInstance) {
            const countryData = itiExpertInstance.getSelectedCountryData();
            const fullNumber = itiExpertInstance.getNumber();
            
            const isoField = document.getElementById('expert-country-iso');
            const dialCodeField = document.getElementById('expert-country-dial-code');
            
            if (isoField && countryData.iso2) isoField.value = countryData.iso2.toUpperCase();
            if (dialCodeField && countryData.dialCode) dialCodeField.value = '+' + countryData.dialCode;
            
            const phoneInput = document.getElementById('expert-phone');
            if (fullNumber && phoneInput) {
                phoneInput.value = fullNumber;
            }
        }

        btn.disabled = true;
        btn.innerHTML = `
            <svg class="w-4 h-4 animate-spin mr-2 inline" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
                <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"/>
            </svg>
            Connecting with Experts...
        `;

        try {
            const formData = new FormData(form);
            const res = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                },
                body: formData
            });

            const data = await res.json();

            btn.classList.remove('bg-red-600', 'hover:bg-red-700');
            btn.classList.add('bg-emerald-600');
            btn.innerHTML = `
                <svg class="w-4 h-4 mr-2 inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
                Consultation Request Received!
            `;

            setTimeout(() => {
                closeExpertModal();
                form.reset();
                btn.disabled = false;
                btn.classList.remove('bg-emerald-600');
                btn.classList.add('bg-red-600', 'hover:bg-red-700');
                btn.innerHTML = 'Request Consultation';
            }, 1800);
        } catch (err) {
            // Fallback to normal form submit if fetch fails
            form.submit();
        }
    }
</script>
