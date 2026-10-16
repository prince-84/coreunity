<!-- Related Articles Section -->
<section class="pb-24 pt-12 px-6 sm:px-12 md:px-20 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $relatedPosts = [
                    [
                        'title' => 'How to Get Your Local Business on Google Maps (Step-by-Step)',
                        'date' => 'January 10, 2022',
                        'category' => 'Local SEO',
                        'excerpt' => "If you run a local business and you're not showing up on Google Maps, you're handing customers straight to competitors who are...",
                        'href' => url('/blog/local-business-on-google-maps'),
                    ],
                    [
                        'title' => 'Google Ads vs. Meta Ads: Which Is Right for Your Business?',
                        'date' => 'January 10, 2022',
                        'category' => 'Paid Marketing',
                        'excerpt' => "If you've spent any time in a marketing Slack channel, a Facebook group for small business owners, or even just a late-night Google search...",
                        'href' => url('/blog/google-ads-vs-meta-ads'),
                    ],
                    [
                        'title' => 'Daily Manual Tasks Your Business Should Automate Today',
                        'date' => 'January 10, 2022',
                        'category' => 'Business Growth',
                        'excerpt' => "If you've been putting off the decision to automate manual tasks in your business, this is your sign to stop waiting...",
                        'href' => url('/blog/daily-manual-tasks'),
                    ],
                ];
            @endphp

            @foreach($relatedPosts as $post)
                <a href="{{ $post['href'] }}" 
                   class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden flex flex-col hover:shadow-md transition-shadow duration-300 group no-underline text-inherit">
                    <!-- Image Container -->
                    <div class="relative w-full aspect-[4/3] sm:aspect-[16/10] overflow-hidden bg-black">
                        <img 
                            src="{{ asset('blog_image.png') }}" 
                            alt="{{ $post['title'] }}" 
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                        />
                        
                        <!-- Hover Overlay -->
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center z-10">
                            <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-full bg-[#8c1c24]/90 flex items-center justify-center text-white text-center text-[13px] sm:text-[15px] font-medium leading-tight transform scale-75 group-hover:scale-100 transition-transform duration-300 shadow-xl">
                                View Full<br />Blog
                            </div>
                        </div>
                    </div>

                    <!-- Content Area -->
                    <div class="p-6 md:p-8 flex flex-col flex-1">
                        <h3 class="font-bold text-gray-900 text-lg md:text-xl leading-tight mb-4 group-hover:text-red-600 transition-colors">
                            {{ $post['title'] }}
                        </h3>
                        
                        <!-- Meta Info -->
                        <div class="flex items-center gap-6 mb-4 text-xs font-medium text-gray-500">
                            <div class="flex items-center gap-2">
                                <div class="relative w-[14px] h-[14px] opacity-70 shrink-0">
                                    <img src="{{ asset('calendar_image.png') }}" alt="Date" class="w-full h-full object-contain" />
                                </div>
                                <span>{{ $post['date'] }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="relative w-[14px] h-[14px] opacity-70 shrink-0">
                                    <img src="{{ asset('file_image.png') }}" alt="Category" class="w-full h-full object-contain" />
                                </div>
                                <span>{{ $post['category'] }}</span>
                            </div>
                        </div>

                        <!-- Excerpt -->
                        <p class="text-gray-400 text-sm leading-relaxed">
                            {{ $post['excerpt'] }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
