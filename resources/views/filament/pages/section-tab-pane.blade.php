<div class="space-y-4">
    <!-- Top Action / Context Bar -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 rounded-xl border border-indigo-200 bg-gradient-to-r from-indigo-50/90 via-white to-indigo-50/50 p-4 px-5 dark:border-indigo-900/60 dark:bg-gradient-to-r dark:from-indigo-950/40 dark:via-gray-900 dark:to-indigo-950/20 shadow-sm">
        <div class="flex items-center gap-3.5">
            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white shadow-md">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </div>
            <div>
                <div class="flex items-center gap-2">
                    <h3 class="text-base font-bold text-gray-900 dark:text-white">{{ $title }}</h3>
                    @if (!empty($order))
                        <span class="inline-flex items-center rounded-md bg-amber-50 dark:bg-amber-950/60 px-2 py-0.5 text-xs font-semibold text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-800">
                            Section {{ $order }}
                        </span>
                    @endif
                    <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 dark:bg-emerald-950/40 px-2 py-0.5 text-xs font-medium text-emerald-700 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Active
                    </span>
                </div>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400 max-w-2xl leading-relaxed">
                    {{ $description }}
                </p>
            </div>
        </div>

        <div class="flex items-center gap-2 shrink-0 self-end sm:self-center">
            <a href="{{ $editUrl }}"
               target="_blank"
               rel="noopener noreferrer"
               class="inline-flex items-center gap-1.5 rounded-lg bg-indigo-600 px-3.5 py-2 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 transition-all active:scale-95">
                <span>Open in New Tab</span>
                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Embedded Live Edit Form View -->
    <div class="rounded-xl border border-gray-200 bg-white dark:border-white/10 dark:bg-gray-900 shadow-sm overflow-hidden">
        <iframe src="{{ $editUrl }}" 
                class="w-full h-[850px] border-0" 
                title="{{ $title }} Edit View"
                loading="lazy">
        </iframe>
    </div>
</div>
