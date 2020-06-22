@extends('layout')

@section('title', __('Historias'))

@section('content')
<div class="mx-auto" style="width: 1200px;">
    @foreach( $parts as $part )
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="{{ 'https://i.blogs.es/b12033/instagram-stories/1366_2000.jpg' }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$part->text}}</h5>
                    <p class="card-text">{{$part->start}}</p>
                    <p class="card-text"><small class="text-muted">Vistas: {{$part->created_at}}</small></p>
                </div>
                </div>
            </div>
        </div>
    @endforeach    
    </div>
@endsection