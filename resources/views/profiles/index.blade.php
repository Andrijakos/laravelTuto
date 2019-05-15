@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-vie1-1.cdninstagram.com/vp/c17eedf678232fb9a435cabfd36dede0/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com" class="rounded-circle"  >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://scontent-vie1-1.cdninstagram.com/vp/e26ac78b5764b5e68e73399abb3c96bf/5D5D2E9B/t51.2885-15/sh0.08/e35/c1.0.747.747/s640x640/53018183_137086830676839_3441644460233435984_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-vie1-1.cdninstagram.com/vp/3253866fa7c90670ab018337308e94aa/5D54361C/t51.2885-15/sh0.08/e35/s640x640/57244862_513269102746206_599322833260649013_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://scontent-vie1-1.cdninstagram.com/vp/ad673accd75beb1a9316096b313c0a28/5D7056B0/t51.2885-15/sh0.08/e35/c0.99.912.912a/s640x640/59610546_1267242960108526_2931033064425945225_n.jpg?_nc_ht=scontent-vie1-1.cdninstagram.com" class="w-100">
        </div>
    </div>
</div>
@endsection
