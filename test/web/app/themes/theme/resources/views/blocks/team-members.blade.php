<div class="{{ $block->classes }}">
    @posts
        <div class="row">
            <div class="col"><img src="{{ get_the_post_thumbnail_url() }}" alt="" class="img-fluid"></div>
            <div class="col">
                <h2>{{ get_the_title() }}</h2>
                <h4>{{ get_field('team_position', get_the_ID()) }}</h4>
            </div>
        </div>
    @endposts
</div>
{{-- @if ($member->have_posts())
        @while ($member->have_posts())
            @php
                $member->the_post();
            @endphp --}}
