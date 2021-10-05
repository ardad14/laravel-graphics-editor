@extends('layouts.savedImagesLayout')

@section('content')
    @foreach($images as $image)
    <div class="mt-4">
        <a href="/userImage/{{$image->id}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
            {{--<img src="{{$image->image}}" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">--}}
            <div class="d-flex gap-2 w-100 justify-content-between">
                <div>
                    <h6 class="mb-0">Автор: {{$image->username}}</h6>
                    <p class="mb-0">Название: {{$image->fileName}}</p>
                    <p class="mb-0">Дата: {{$image->created_at}}</p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
@endsection
