@props([
    'action',
    'actionAlignment' => null,
    'afterItem' => null,
    'blocks',
    'columns' => null,
    'key',
    'noSearchResultsMessage' => null,
    'searchable' => false,
    'searchDebounce' => 0,
    'searchPrompt' => null,
    'trigger',
    'width' => null,
])

@php
    use Filament\Support\Enums\Alignment;
    use Filament\Support\Enums\GridDirection;
    use Filament\Support\Enums\Width;
    use Filament\Support\Facades\FilamentAsset;
    use Filament\Support\View\ComponentAttributeBag as FilamentComponentAttributeBag;
    use Illuminate\Contracts\Support\Htmlable;
    use Illuminate\Support\Js;
    use Illuminate\Support\Str;

    $placement = match ($actionAlignment) {
        Alignment::End, Alignment::Right => 'bottom-end',
        default => 'bottom-start',
    };

    if (is_string($width)) {
        $width = Width::tryFrom($width) ?? $width;
    }

    $widthClass = ($width instanceof Width)
        ? "fi-width-{$width->value}"
        : (is_string($width) ? $width : null);

    $listAttributes = $searchable
        ? new FilamentComponentAttributeBag([
            'x-load' => true,
            'x-load-src' => FilamentAsset::getAlpineComponentSrc('builder', 'filament/forms'),
            'x-data' => 'builderBlockPickerFormComponent()',
            'x-on:dropdown-escape' => 'handleEscape($event)',
            'data-dropdown-escape' => true,
        ])
        : new FilamentComponentAttributeBag;

    // Define Global Sections in exact requested order with their saved preview images
    $globalSectionKeys = [
        'our_work' => [
            'name' => 'our_work',
            'label' => 'Our Work Showcase',
            'image' => 'Our_Work_Showcase.png',
            'subtitle' => 'Case studies & portfolio grid'
        ],
        'our_clients' => [
            'name' => 'our_clients',
            'label' => 'Our Clients Logos',
            'image' => 'Our_Clients_Logos.png',
            'subtitle' => 'Client brand logos & stats'
        ],
        'client_reviews' => [
            'name' => 'client_reviews',
            'label' => 'Client Reviews (Marquee)',
            'image' => 'Client_Reviews.png',
            'subtitle' => 'Continuous reviews ticker'
        ],
        'blog_showcase' => [
            'name' => 'blog_showcase',
            'label' => 'Blog Showcase Section',
            'image' => 'Blog_Showcase_Section.png',
            'subtitle' => 'Latest insights & news'
        ],
        'team' => [
            'name' => 'team',
            'label' => 'Team Members',
            'image' => 'Team_Members.png',
            'subtitle' => 'Leadership & team profiles'
        ],
        'testimonials' => [
            'name' => 'testimonials',
            'label' => 'Testimonials',
            'image' => 'Testimonials.png',
            'subtitle' => 'Featured partner spotlight'
        ],
    ];

    $blockMap = [];
    foreach ($blocks as $b) {
        $blockMap[$b->getName()] = $b;
    }

    $globalBlocksList = [];
    foreach ($globalSectionKeys as $k => $conf) {
        if (isset($blockMap[$k])) {
            $globalBlocksList[] = [
                'block' => $blockMap[$k],
                'image' => $conf['image'],
                'subtitle' => $conf['subtitle'],
            ];
        }
    }

    $customBlocksList = [];
    foreach ($blocks as $b) {
        $bName = $b->getName();
        if (!isset($globalSectionKeys[$bName]) && $bName !== 'global_component') {
            $customBlocksList[] = $b;
        }
    }
@endphp

<x-filament::dropdown
    :placement="$placement"
    shift
    flip
    max-height="min(26rem, calc(100vh - 12rem))"
    width="md"
    :wire:key="$key . '.' . $action->getName() . '.' . $afterItem . '.block-picker.' . md5(serialize([$widthClass, $placement, filled($blocks), $searchable]))"
    :attributes="
        \Filament\Support\prepare_inherited_attributes(
            $attributes->class([
                'fi-fo-builder-block-picker',
                ($actionAlignment instanceof Alignment) ? ('fi-align-' . $actionAlignment->value) : $actionAlignment,
            ]),
        )
    "
>
    <x-slot name="trigger">
        {{ $trigger }}
    </x-slot>

    @if (filled($blocks))
        <x-filament::dropdown.list
            :attributes="\Filament\Support\prepare_inherited_attributes($listAttributes)"
            class="max-h-[min(26rem,calc(100vh-12rem))] overflow-y-auto divide-y divide-gray-100 dark:divide-gray-800"
        >
            @if ($searchable)
                <div class="fi-fo-builder-block-picker-search-ctn p-2">
                    <x-filament::input
                        type="text"
                        data-dropdown-autofocus
                        x-ref="searchInput"
                        x-on:dropdown-autofocus="clearSearch()"
                        x-on:keydown.enter.prevent=""
                        :attributes="
                            \Filament\Support\prepare_inherited_attributes(
                                new FilamentComponentAttributeBag([
                                    'aria-label' => e($searchPrompt),
                                    'placeholder' => e($searchPrompt),
                                    'x-model.debounce.' . $searchDebounce => 'search',
                                ]),
                            )
                        "
                    />
                </div>
            @endif

            {{-- ========================================================= --}}
            {{-- GROUP 1: GLOBAL SECTIONS --}}
            {{-- ========================================================= --}}
            @if (!empty($globalBlocksList))
                <div class="py-1">
                    <div class="px-3.5 py-2 text-[11px] font-bold uppercase tracking-wider text-red-600 bg-red-50/60 dark:bg-red-950/30 flex items-center justify-between border-b border-red-100/70 dark:border-red-900/30">
                        <div class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-red-600"></span>
                            <span>Global Sections</span>
                        </div>
                        <span class="text-[9px] font-semibold px-1.5 py-0.5 rounded bg-red-600/10 text-red-600 uppercase tracking-wider">Synchronized</span>
                    </div>

                    <div class="py-1">
                        @foreach ($globalBlocksList as $item)
                            @php
                                $block = $item['block'];
                                $blockLabel = $block->getLabel();
                                $imageName = $item['image'];
                                $subtitle = $item['subtitle'];

                                $blockSearchLabel = null;
                                if ($searchable) {
                                    $blockSearchLabel = $blockLabel;
                                    if ($blockSearchLabel instanceof Htmlable) {
                                        $blockSearchLabel = html_entity_decode(strip_tags($blockSearchLabel->toHtml()), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                                    }
                                    $blockSearchLabel = Str::lower($blockSearchLabel);
                                }

                                $wireClickActionArguments = ['block' => $block->getName()];
                                if (filled($afterItem)) {
                                    $wireClickActionArguments['afterItem'] = $afterItem;
                                }
                                $wireClickActionArguments = Js::from($wireClickActionArguments);
                                $wireClickAction = "mountAction('{$action->getName()}', {$wireClickActionArguments}, { schemaComponent: '{$key}' })";

                                $imageSrc = asset($imageName);
                            @endphp

                            <x-filament::dropdown.list.item
                                :image="$imageSrc"
                                x-on:click="close"
                                :wire:click="$wireClickAction"
                                :wire:key="$searchable ? md5($wireClickAction . $blockSearchLabel) : null"
                                :data-block-label="$blockSearchLabel"
                                :x-show="$searchable ? 'isBlockVisible($el)' : null"
                                class="py-2.5 px-3 hover:bg-red-50/40 dark:hover:bg-red-950/20 transition-colors"
                            >
                                <div class="flex flex-col text-left min-w-0">
                                    <span class="font-semibold text-gray-900 dark:text-gray-100 text-sm leading-snug">
                                        {{ $blockLabel }}
                                    </span>
                                    <span class="text-[11px] text-gray-400 dark:text-gray-500 font-normal">
                                        {{ $subtitle }}
                                    </span>
                                </div>
                            </x-filament::dropdown.list.item>
                        @endforeach
                    </div>
                </div>
            @endif

            {{-- ========================================================= --}}
            {{-- GROUP 2: CUSTOM / PAGE SECTIONS --}}
            {{-- ========================================================= --}}
            @if (!empty($customBlocksList))
                <div class="py-1">
                    <div class="px-3.5 py-2 text-[11px] font-bold uppercase tracking-wider text-indigo-600 bg-indigo-50/60 dark:bg-indigo-950/30 flex items-center justify-between border-b border-indigo-100/70 dark:border-indigo-900/30">
                        <div class="flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-indigo-600"></span>
                            <span>Custom / Page Sections</span>
                        </div>
                        <span class="text-[9px] font-semibold px-1.5 py-0.5 rounded bg-indigo-600/10 text-indigo-600 uppercase tracking-wider">Customizable</span>
                    </div>

                    <div class="py-1">
                        @foreach ($customBlocksList as $block)
                            @php
                                $blockIcon = $block->getIcon();
                                $blockLabel = $block->getLabel();

                                $blockSearchLabel = null;
                                if ($searchable) {
                                    $blockSearchLabel = $blockLabel;
                                    if ($blockSearchLabel instanceof Htmlable) {
                                        $blockSearchLabel = html_entity_decode(strip_tags($blockSearchLabel->toHtml()), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                                    }
                                    $blockSearchLabel = Str::lower($blockSearchLabel);
                                }

                                $wireClickActionArguments = ['block' => $block->getName()];
                                if (filled($afterItem)) {
                                    $wireClickActionArguments['afterItem'] = $afterItem;
                                }
                                $wireClickActionArguments = Js::from($wireClickActionArguments);
                                $wireClickAction = "mountAction('{$action->getName()}', {$wireClickActionArguments}, { schemaComponent: '{$key}' })";
                            @endphp

                            <x-filament::dropdown.list.item
                                :icon="$blockIcon"
                                x-on:click="close"
                                :wire:click="$wireClickAction"
                                :wire:key="$searchable ? md5($wireClickAction . $blockSearchLabel) : null"
                                :data-block-label="$blockSearchLabel"
                                :x-show="$searchable ? 'isBlockVisible($el)' : null"
                                class="py-2 px-3 hover:bg-indigo-50/40 dark:hover:bg-indigo-950/20 transition-colors"
                            >
                                <span class="text-sm font-medium text-gray-800 dark:text-gray-200">
                                    {{ $blockLabel }}
                                </span>
                            </x-filament::dropdown.list.item>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($searchable)
                <div
                    x-cloak
                    x-show="hasNoSearchResults"
                    role="status"
                    aria-live="polite"
                    class="fi-fo-builder-block-picker-no-search-results-message p-3 text-center text-xs text-gray-500"
                >
                    {{ $noSearchResultsMessage }}
                </div>
            @endif
        </x-filament::dropdown.list>
    @endif
</x-filament::dropdown>
