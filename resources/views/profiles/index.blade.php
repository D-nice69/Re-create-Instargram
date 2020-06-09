@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fhan4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/71194467_399173424076535_3221790492127657984_n.jpg?_nc_ht=instagram.fhan4-1.fna.fbcdn.net&_nc_ohc=SFMB1U-CzdoAX9dEgna&oh=1a59779bfbbb359818fc34949bab0714&oe=5F0553F4" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div><h1>{{$user->username}}</h1></div>
                <a href="/p/create"> add new post </a>
            </div>

            <div class="d-flex">
                <div class="pr-5"><strong>{{$user -> posts -> count() }}</strong> posts</div>
                <div class="pr-5"><strong>100</strong> followers</div>
                <div class="pr-5"><strong>100</strong> follow</div>
            </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user -> posts as $post)
            
            <div class="col-4 pb-4"><a href="#"><img src="/storage/{{$post->image}}" class="w-100"></a></div>
        
        @endforeach
    </div>
</div>
@endsection
