
@extends('layouts.app')
@section('content')
    <div class="container">
        <p>
            <h3>My Favorites</h3>
        </p>
      <div class="card-deck mb-3 text-center">
        @forelse ($myFavorites as $myFavorite)
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Laravel</h4>
          </div>
          <div class="card-body">
            <h3>{{ $myFavorite->title }}</h3>
            <p>{{ $myFavorite->body }}</p>
          </div>
        @if (Auth::check())
          <div class="card-footer">
                <favorite
                    :post={{ $myFavorite->id }}
                    :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}>
                </favorite>
          </div>
        @endif
        </div>
        @empty
        <p>You have no favorite posts.</p>
        @endforelse
    </div>
@stop