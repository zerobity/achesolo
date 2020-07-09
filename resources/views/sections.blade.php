@extends('layout')

@section('title', __('Historias'))

@section('content')
<div class="mx-auto" style="width: 1200px;">
<div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="{{ 'https://i.blogs.es/b12033/instagram-stories/1366_2000.jpg' }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$story->title}}</h5>
                    <p class="card-text">{{ $story->description }}</p>
                    <p class="card-text">{{ $category }}</p>
                    @for( $i = 0; $i < 2 ;$i++)
                    <img src="{{ 'data:image/png;base64,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' }}" class="card-img" height="50px" width="50px">
                    @endfor
                    <p class="card-text">{{ $story->language }}</p>
                    <p class="card-text">{{ $creator->name }}</p>
                    <p class="card-text"><small class="text-muted">Creado: {{$story->created_at}}</small></p>
                </div>
                </div>
            </div>
        </div>
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
                </div>
                </div>
            </div>
        </div>
    @endforeach    
    </div>
@endsection