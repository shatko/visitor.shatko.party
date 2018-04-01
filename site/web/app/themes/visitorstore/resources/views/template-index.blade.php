{{--
  Template Name: Index Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    <div class="main-carousel">
      <div class="carousel-cell">slide 1</div>
      <div class="carousel-cell">slide 2</div>
      <div class="carousel-cell">slide 3</div>
    </div>


    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
