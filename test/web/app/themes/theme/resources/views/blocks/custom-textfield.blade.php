<div class="{{ $block->classes }}">
    <div class="product row gap-2 align-items-center mb-4 justify-content-center">
        <div class="product__image col-sm-2">
            <img src="{{ $productImage }}" alt="imageOst" class="w-100 object-fit-cover">
        </div>
        <div class="product__info col-sm-2">
            <p class="h4">{{ $productTitle }}</p>
            <p>£{{ $productPrice }}</p>
        </div>
    </div>
</div>
<InnerBlocks />
