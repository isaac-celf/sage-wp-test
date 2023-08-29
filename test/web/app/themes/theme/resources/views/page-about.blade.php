@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        {{-- @include('partials.page-header')
         --}}
        @includeFirst(['partials.content-page', 'partials.content'])

        <x-carousel />

        <h2>Our Team</h2>
        <div class="row">
            <x-hero tite="Product" classReverse="col" text="my name is Isaac. 22 years old." />
            <x-hero tite="Product" classReverse="col" text="my name is Isaac. 22 years old." />
        </div>
        <div class="row">
            <x-hero tite="Product" classReverse="col" text="my name is Isaac. 22 years old." />
            <x-hero tite="Product" classReverse="col" text="my name is Isaac. 22 years old." />
        </div>

        <x-large-statement />

        <x-full-text title="History"
            text1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, id deleniti molestias ab porro, minima aperiam voluptate, maxime unde minus a quibusdam cum quod exercitationem!"
            text2="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, id deleniti molestias ab porro, minima aperiam voluptate, maxime unde minus a quibusdam cum quod exercitationem!" />
    @endwhile
@endsection
