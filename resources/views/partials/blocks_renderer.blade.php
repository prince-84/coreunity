@props(['blocks' => []])

@if(!empty($blocks) && is_array($blocks))
    @foreach($blocks as $block)
        @php
            $type = $block['type'] ?? null;
            $data = $block['data'] ?? [];
        @endphp

        @if($type && view()->exists("blocks.{$type}"))
            @include("blocks.{$type}", ['block' => $data, 'blockType' => $type, 'blockIndex' => $loop->index])
        @endif
    @endforeach
@endif
