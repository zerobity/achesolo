@extends('layout')

@section('title', __('Historias'))

@section('content')
<div class="mx-auto" style="width: 1200px;">
    @foreach( $stories as $story )
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="{{$story->image}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$story->title}}</h5>
                    <p class="card-text">{{$story->description}}</p>
                    <p class="card-text"><small class="text-muted">Vistas: {{$story->views}}</small></p>
                </div>
                </div>
            </div>
        </div>
    @endforeach    
    </div>
@endsection