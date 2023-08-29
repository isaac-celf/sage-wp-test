{{-- <div class="{{ $block->classes }}"> --}}

<div class="person row align-items-center w-50">
    <img src="{{ $image }}" alt="ost" class="person__img col mb-2">
    <div class="person__info col w-75">
        <h3 class="">{{ $firstName }}</h3>
        <h4 class="">{{ $surname }}</h4>
        <p class="">{{ $position }}</p>
    </div>
</div>

<div>
    {{-- <InnerBlocks /> --}}
</div>
{{-- </div> --}}
