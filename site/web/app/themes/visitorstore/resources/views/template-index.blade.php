{{--
  Template Name: Index Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-block-fullscreen-slider')
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
