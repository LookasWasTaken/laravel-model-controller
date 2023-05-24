@extends('layouts.app')

@section('content')
<div class="container py-5dark">
    <div class="row">
        @forelse($movies as $movie)
        <div class="col-4 g-5">
            <div class="card h-100">
                <div class="card-header bg-dark rounded">
                    <img class="card-img-top img-fluid rounded" src="{{$movie -> image}}" alt="{{$movie -> title}} image">
                </div>
                <div class="card-body d-flex flex-column bg-light rounded">
                    @if($movie -> title === $movie -> original_title)
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lowercase fw-bold text-dark">TITLE:</div>
                        <div class="text-uppercase fw-bold text-dark">{{$movie -> title}}</div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lowercase fw-bold text-dark">VOTE:</div>
                        <div class="text-uppercase fw-bold text-dark">{{$movie -> vote}}</div>
                    </div>
                    @else
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lowercase fw-bold text-dark">TITLE:</div>
                        <div class="text-uppercase fw-bold text-dark">{{$movie -> title}}</div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lowercase fw-bold text-dark">ORIGINAL TITLE:</div>
                        <div class="text-uppercase text-dark">{{$movie -> original_title}}</div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-lowercase fw-bold text-dark">VOTE:</div>
                        <div class="text-uppercase fw-bold text-dark">{{$movie -> vote}}</div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <h2>There's no data</h2>
        </div>
        @endforelse
    </div>
</div>
@endsection