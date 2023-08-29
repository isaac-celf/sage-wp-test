@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        <div class="row">
            <img src="{{ get_the_post_thumbnail_url() }}" alt="" class="img-fluid col">
        </div>
        @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    @endwhile
@endsection
