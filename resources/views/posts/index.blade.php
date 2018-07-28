
@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="card-deck mb-3 text-center">
        @forelse($posts as $post)
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Laravel</h4>
          </div>
          <div class="card-body">
            <h3>{{$post->title}}</h3>
            <p>{{$post->title}}</p>
          </div>
          <div class="card-footer">
              @if (Auth::check())
              <favorite
                  :post={{ $post->id }}
                  :favorited={{ $post->favorited() ? 'true' : 'false' }}>
              </favorite> | 
              <like
                :post={{ $post->id }}
                :liked={{ $post->liked() ? 'true' : 'false' }}>
              </like>
              @endif
          </div>
        </div>
        @empty
        <p>No posts record</p>
        @endforelse
    </div>
    <div class="center">
        {{ $posts->links() }}
    </div>
@stop