@php
    $pageRecord = $page ?? ($getRecord() ?? ($component?->getRecord() ?? null));
    $sections = $pageRecord ? $pageRecord->getSectionsList() : collect();
@endphp

<div class="space-y-4">
    @if (!$pageRecord)
        <div class="rounded-xl border border-dashed border-gray-300 dark:border-gray-700 p-8 text-center bg-gray-50 dark:bg-gray-800/40">
            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-primary-100 text-primary-600 dark:bg-primary-950 dark:text-primary-400">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>
            </div>
            <h3 class="mt-3 text-sm font-semibold text-gray-900 dark:text-white">Save Page First</h3>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Once created and saved, all structured sections for this page will appear here in table format for instant 1-click editing.</p>
        </div>
    @elseif ($sections->isEmpty())
        <div class="rounded-xl border border-dashed border-gray-300 dark:border-gray-700 p-8 text-center bg-gray-50 dark:bg-gray-800/40">
            <p class="text-sm text-gray-500 dark:text-gray-400">No structured sections configured for this page yet.</p>
        </div>
    @else
        <!-- Information Banner -->
        <div class="flex items-center justify-between rounded-xl border border-indigo-200 bg-indigo-50/70 dark:border-indigo-900/60 dark:bg-indigo-950/30 p-4 px-5">
            <div class="flex items-center gap-3">
                <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-indigo-600 text-white shadow-sm">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-indigo-950 dark:text-indigo-200">
                        {{ $pageRecord->slug === 'home' ? 'Home Page Dynamic Sections Directory' : $pageRecord->title . ' Sections Directory' }}
                    </h4>
                    <p class="text-xs text-indigo-700/80 dark:text-indigo-300/80">
                        Click on any section row or the <strong>Edit Section</strong> button to directly open and edit that specific section.
                    </p>
                </div>
            </div>
            <span class="inline-flex items-center rounded-full bg-indigo-100 dark:bg-indigo-900/60 px-3 py-1 text-xs font-semibold text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800">
                {{ $sections->count() }} Sections Active
            </span>
        </div>

        <!-- Sections Table -->
        <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm dark:border-white/10 dark:bg-gray-900">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="border-b border-gray-200 bg-gray-50/80 dark:border-white/10 dark:bg-white/5 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                            <th scope="col" class="py-3.5 px-4 w-28 text-center">Order</th>
                            <th scope="col" class="py-3.5 px-4 w-72">Section Name</th>
                            <th scope="col" class="py-3.5 px-4">Overview & Details</th>
                            <th scope="col" class="py-3.5 px-4 w-28 text-center">Status</th>
                            <th scope="col" class="py-3.5 px-4 w-40 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-white/5">
                        @foreach ($sections as $section)
                            @php
                                $editUrl = url($section->edit_url ?? '#');
                            @endphp
                            <tr onclick="window.location.href='{{ $editUrl }}'"
                                class="group cursor-pointer transition-all duration-150 hover:bg-indigo-50/60 dark:hover:bg-indigo-950/20">
                                
                                <!-- Order Badge -->
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    <span class="inline-flex items-center rounded-md bg-amber-50 dark:bg-amber-950/50 px-2.5 py-1 text-xs font-semibold text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-800 group-hover:bg-amber-100 dark:group-hover:bg-amber-900/60 transition-colors">
                                        Section {{ $section->section_order }}
                                    </span>
                                </td>

                                <!-- Section Name & Badge -->
                                <td class="py-3.5 px-4">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center gap-2">
                                            <svg class="h-4 w-4 text-indigo-500 group-hover:text-indigo-600 transition-colors shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                            </svg>
                                            <span class="font-bold text-gray-900 group-hover:text-indigo-600 dark:text-white dark:group-hover:text-indigo-400 transition-colors">
                                                {{ $section->name }}
                                            </span>
                                        </div>
                                        @if (!empty($section->badge))
                                            <span class="text-[11px] font-medium text-gray-400 dark:text-gray-500">
                                                {{ $section->badge }}
                                            </span>
                                        @endif
                                    </div>
                                </td>

                                <!-- Description -->
                                <td class="py-3.5 px-4 text-gray-600 dark:text-gray-300 text-xs leading-relaxed">
                                    {{ $section->description ?? 'No specific description configured.' }}
                                </td>

                                <!-- Status -->
                                <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                    @if ($section->is_active)
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-50 dark:bg-emerald-950/40 px-2.5 py-1 text-xs font-medium text-emerald-700 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                            Active
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1.5 rounded-full bg-gray-100 dark:bg-gray-800 px-2.5 py-1 text-xs font-medium text-gray-600 dark:text-gray-400 border border-gray-200 dark:border-gray-700">
                                            <span class="h-1.5 w-1.5 rounded-full bg-gray-400"></span>
                                            Inactive
                                        </span>
                                    @endif
                                </td>

                                <!-- Action -->
                                <td class="py-3.5 px-4 text-right whitespace-nowrap">
                                    <a href="{{ $editUrl }}"
                                       onclick="event.stopPropagation();"
                                       class="inline-flex items-center gap-1.5 rounded-lg bg-indigo-600 px-3.5 py-1.5 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all active:scale-95">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                        Edit Section
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Table Footer Tip -->
            <div class="border-t border-gray-100 bg-gray-50/50 dark:border-white/5 dark:bg-white/[0.02] px-4 py-2.5 text-xs text-gray-500 dark:text-gray-400 flex items-center justify-between">
                <span>💡 <strong>Tip:</strong> Click anywhere on a row or the "Edit Section" button to immediately edit that section.</span>
                <span class="font-medium text-gray-400">{{ $sections->count() }} total sections</span>
            </div>
        </div>
    @endif
</div>
