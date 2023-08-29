<section class="product mb-4 col">
    <div class="row justify-content-between gx-0 gap-3 {{ $classReverse }}">
        <div class="product__img col-md">
            <img src="@asset('images/land1.jpg')" alt="productimg1" class="img-fluid object-fit-cover">
        </div>
        <div class="product__info py-5 px-5 col-sm">
            <h2 class="secondary_heading mb-5">{{ $title }}</h2>
            <div class="pt-2">
                <p class="product_description mb-6">{{ $text }}
                </p>
                @if ($btnChange)
                    <a href="#" class="btn btn-primary">{{ $btnChange }}</a>
                @endif
            </div>
        </div>
    </div>
</section>
