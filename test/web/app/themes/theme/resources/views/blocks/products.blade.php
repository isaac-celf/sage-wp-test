<div class="{{ $block->classes }}">
    <div class="row gap-3 align-items-center container m-auto my-3">
        <div class="col"><img src="{{ $getImage }}" alt="prod1" class="img-fluid"></div>
        <div class="col">
            <h2 class="mb-5">{{ $productTitle }}</h2>
            <p>{{ $price }}</p>
            <a href="{{ $actionBtn }}" class="btn btn-primary">CTA</a>
        </div>
    </div>
</div>
