@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fhre2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fhre2-1.fna.fbcdn.net&_nc_ohc=XflqF9pLQ-gAX_TPprT&oh=e993666e8013141444b9b06778c49768&oe=5ECEBCBA" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <a href="#">Add a post..</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212k</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>

    </div>

    <div class="row pt-5">
        <div class="col-4"><img src="https://instagram.fhre2-1.fna.fbcdn.net/v/t51.2885-15/e35/c1.0.748.748a/s150x150/82339013_604012433755999_687788727040640519_n.jpg?_nc_ht=instagram.fhre2-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=mDeDe1uXsS4AX9gcNv8&oh=86c1740b2087ea82de533158a3e81939&oe=5EBE8605" class="w-100"></div>
        <div class="col-4"><img src="https://instagram.fhre2-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.111.928.928a/s480x480/82967728_222124025469517_5532436576170466152_n.jpg?_nc_ht=instagram.fhre2-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=LWLpPH3_9rwAX8GG5z9&oh=41792d0fed6ccf7c4e4da7c8ae410360&oe=5EBA29F9" class="w-100"></div>
        <div class="col-4"><img src="https://instagram.fhre2-1.fna.fbcdn.net/v/t51.2885-15/e35/c95.0.560.560a/s150x150/83685533_642392923240008_2402831147948054363_n.jpg?_nc_ht=instagram.fhre2-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=4R17LlZsjLAAX8cfOXt&oh=228b22f59d333573c1b7e9c6174e4a28&oe=5EC080A6" class="w-100"></div>
    </div>

</div>
@endsection
