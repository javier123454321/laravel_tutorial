@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12 p-md-5 d-flex justify-content-end">
            <img class="rounded-circle profilePic"src="https://scontent-ort2-2.xx.fbcdn.net/v/t1.0-9/69893294_10161964581705417_5876656923364818944_n.jpg?_nc_cat=106&_nc_ohc=8o4lCJcP4RsAX-N1d60&_nc_ht=scontent-ort2-2.xx&oh=f50f7c4cb7d16c0110c8c4fe3a492114&oe=5EA22E74" alt="Profile Picture">
        </div>
        <div class="col-md-8 col-sm-12 p-md-5 profileName">
            <h1>{{ $user->username }}</h1>
            <a href= ""> <button class="btn btn-outline-primary btn-sm mt-1 mb-3" variant="outline-primary"> Add New Post </button></a>
            <div class="col-md-8 col-sm-12 profileData">
                <ul>
                    <li><strong>153</strong> posts</li>
                    <li><strong>7,453</strong> followers</li>
                    <li><strong>37</strong> following</li>
                </ul>
            </div>
            <div class="font-weight-bold profileInfo">{{ $user->profile->title }}</div>
            <div class="profileDescription">{{ $user->profile->description }}</div>
            <div class="font-weight-bold text-dark"><a class="text-dark" href="{{ $user->profile->url }}">{{ $user->profile->url ?? 'Not Available' }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)
        <div class="col-4">
            <img src="/storage/uploads/{{ $post->image }}" class="w-100">
        </div>
    @endforeach
    </div>
</div>

<style>
body{
    max-width: 800px;
    margin: auto;
}
    .minImageContainer{
        width: 240px;
        height: 240px;
        overflow: hidden;
    }
    .minImage{
        width: 240px;
        height: 240px;
        object-fit: cover;
    }
    .profilePic{
        height: 150px;
    }
    .profileData, .profileName, .profilePic, .profileInfo:nthChild(0){
        border: 1px solid #cccccc;
        padding-left: 0;
    }
    .profileData, .profileData > ul{
        list-style: none;
        display: flex;
        padding: 0;
    }
    .profileData > ul > li{
        margin-right: 10px;
    }
    .profileInfo{
        margin-top: 0px;
    }
    .link{
        color:#ccc;
    }
</style>
@endsection
