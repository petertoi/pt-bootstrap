@extends('layouts.app')

@section('content')

  @include('partials.hero--front-page')
  @while (have_posts()) @php the_post() @endphp
  <div class="container">
    <div class="row justify-content-center">
      <div class="col col-md-8 col-lg-6 mb-5">
        @include('partials.content-'.get_post_type())
      </div>
    </div>
  </div>
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
