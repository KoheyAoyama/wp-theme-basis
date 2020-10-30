@extends('layout')

@section('content')
    <div class="container">
        <ul>
            @if (have_posts())
                @while (have_posts())
                    <?php the_post(); ?>
                    <li>
                        <a href="{{ the_permalink() }}">{{ the_title() }}</a>
                    </li>
                @endwhile
            @endif
        </ul>
    </div>
@endsection