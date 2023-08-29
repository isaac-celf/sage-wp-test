@extends('layouts.app')


@section('content')
    @while (have_posts())
        @php(the_post())
        {{-- @include('partials.page-header') --}}
        {{-- @includeFirst(['partials.content-page', 'partials.content']) --}}

        <x-carousel />



        <?php
        $arr = [
            [
                'title' => 'title 1',
                'button' => 'Button 1',
            ],
            [
                'title' => 'title 2',
                'button' => 'Button 2',
            ],
            [
                'title' => 'title 3',
                'button' => 'Button 3',
            ],
        ];
        ?>

        {{-- @foreach ($arr as $index => $val)
            <x-hero :title="$val['title']" :btnChange="$val['button']" :number="$index" />
        @endforeach --}}


        <x-hero title="title 2" btnChange="Click Here Now" classInvert="d-flex flex-column" />
        <x-button btnName="Learn More" />
        <x-hero title="title 3" btnChange="New Button 2" />
        <x-hero title="title 4" btnChange="Click this" classReverse="flex-row-reverse" btnPrimary="btn-primary-2" />

        <x-alert alert-type="danger" message="hello its an alert" />



        <section class="product__display mb-4 w-100 position-relative" style="height: 50vh">
            <img src="@asset('images/land2.jpg')" alt="land2"
                class="product__display-img img-fluid object-fit-cover position-absolute opacity-75"
                style="width:100%; height:50vh">
            <div class="product__display-description position-absolute top-50 start-0 translate-middle-y px-5">
                <h2 class="secondary-heading">Product Details</h2>
                <a href="#" class="btn btn-primary btn-cta">CTA</a>
            </div>
        </section>


        <x-full-text
            text1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, id deleniti molestias ab porro, minima aperiam voluptate, maxime unde minus a quibusdam cum quod exercitationem!"
            text2="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, id deleniti molestias ab porro, minima aperiam voluptate, maxime unde minus a quibusdam cum quod exercitationem!" />
    @endwhile
@endsection
