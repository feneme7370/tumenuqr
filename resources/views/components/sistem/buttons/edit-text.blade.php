@props(['title' => ''])

<button {{ $attributes->merge(['type' => 'button', 'class' => '

flex items-center gap-2 p-1 font-semibold text-xs 

uppercase tracking-widest
text-purple-700 

hover:text-purple-500 

active:text-purple-500
']) }}>
    <div class="flex flex-row gap-1 items-center">
        
        <x-sistem.icons.hi-pencil-square/>
        {{ $title }}{{$slot}}
    </div>
</button>
