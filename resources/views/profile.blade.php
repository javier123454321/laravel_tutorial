@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-12 p-md-5 d-flex justify-content-end">
            <img class="rounded-circle profilePic"src="https://scontent-ort2-2.xx.fbcdn.net/v/t1.0-9/69893294_10161964581705417_5876656923364818944_n.jpg?_nc_cat=106&_nc_ohc=8o4lCJcP4RsAX-N1d60&_nc_ht=scontent-ort2-2.xx&oh=f50f7c4cb7d16c0110c8c4fe3a492114&oe=5EA22E74" alt="Profile Picture">
        </div>
        <div class="col-md-8 col-sm-12 p-md-5 profileName">
            <h1>{{ $user->username }}</h1>
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
    <div class="row">
        <div></div>
    </div>
    <div class="row">
        <div class="col-4 minImageContainer"><img class="minImage" src="https://scontent-ort2-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.179.1440.1440a/s640x640/79212880_992134394482899_6103197192830079747_n.jpg?_nc_ht=scontent-ort2-2.cdninstagram.com&_nc_cat=103&_nc_ohc=_rAYQuJ-6VwAX-06BLq&oh=9d95569a53f3c954e3cece5160ac70a8&oe=5EDA55E3"></div>
        <div class="col-4 minImageContainer"><img class="minImage" src="https://scontent-ort2-2.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/61904293_485469518663618_8701496422875389811_n.jpg?_nc_ht=scontent-ort2-2.cdninstagram.com&_nc_cat=102&_nc_ohc=-7Dwsxa3VYgAX_Khd7c&oh=23ee86a3b97113a88fb34aad617f9c15&oe=5EA7CC7B"></div>
        <div class="col-4 minImageContainer"><img class="minImage" src="https://scontent-ort2-2.cdninstagram.com/v/t51.2885-15/e35/52980597_1497271987069798_1138016754476988360_n.jpg?_nc_ht=scontent-ort2-2.cdninstagram.com&_nc_cat=110&_nc_ohc=CfVw8PsWNLsAX-E3yxB&oh=1c28f81ea7bd906765332ebab9838712&oe=5EDBD341"></div>
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
