@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 text-center">
            <img src="https://instagram.fhel6-1.fna.fbcdn.net/vp/b9b39f52137901effb21e8c4eb041f11/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fhel6-1.fna.fbcdn.net"
                class="rounded-circle"
            >
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div>
                <a href="https://www.freecodecamp.org/">www.freecodecamp.org</a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img
                    src="https://instagram.fhel6-1.fna.fbcdn.net/vp/a3969c70260a782af664b15bfaffdde5/5DBAF0A1/t51.2885-15/sh0.08/e35/c0.109.925.925a/s640x640/66170854_402202580395287_1871271487333362373_n.jpg?_nc_ht=instagram.fhel6-1.fna.fbcdn.net"
                    class="w-100"
            >
        </div>
        <div class="col-4">
            <img
                    src="https://instagram.fhel6-1.fna.fbcdn.net/vp/d247f7865583cae9605c3fe8a276b448/5DA7E1B7/t51.2885-15/sh0.08/e35/c7.0.736.736a/s640x640/64784397_2062957977165387_5650540829266693249_n.jpg?_nc_ht=instagram.fhel6-1.fna.fbcdn.net"
                    class="w-100"
            >
        </div>
        <div class="col-4">
            <img
                    src="https://instagram.fhel6-1.fna.fbcdn.net/vp/3ec8f5376a70cb787bf911601e126f1a/5DBD4D94/t51.2885-15/sh0.08/e35/c6.0.737.737a/s640x640/64842736_675454446259763_390781940470065216_n.jpg?_nc_ht=instagram.fhel6-1.fna.fbcdn.net"
                    class="w-100"
            >
        </div>

    </div>
</div>
@endsection
