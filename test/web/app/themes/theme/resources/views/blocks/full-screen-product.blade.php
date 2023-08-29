<div class="{{ $block->classes }}">
    <div class="position-relative">
        <img src="{{ $getImage }}" alt="img" class="img-fluid w-100 object-fit-cover" style="height: 20rem">
        <div class="fullscreen__info position-absolute z-1 top-50 start-0 translate-middle-y mx-4">
            <h2>{{ $productTitle }}</h2>
            <a href="{{ $actionBtn }}" class="btn btn-primary">CTA</a>
        </div>
    </div>
</div>
