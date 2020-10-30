@extends('layout')

@section('content')
    <div class="container">
        @if (have_posts())
            @while (have_posts())
                <?php the_post(); ?>
                <article>
                    <h1>{{ the_title() }}</h1>
                    <div class="content">
                        {{ the_content() }}
                    </div>
                </article>
            @endwhile
        @endif
    </div>
@endsection