@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        </div>
       <div class="row text-center">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">先生一覧</h1>
            <p class="lead mb-0">気になる先生がいたらフォローしよう</p>
            <p class="lead"><a href="https://bootstrapious.com/snippets" class="text-white">
                <u>Bootstrapious</u></a>
            </p>
        </div>
    </div>


    <div class="row text-center">

        <!-- Team item -->
        @foreach($teachers as $teacher)
        <div class="col-xl-3 col-sm-6 mb-5" style="height:450px;">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-2">{{$teacher->name}}</h5><span class="small text-uppercase text-muted">{{$teacher->instrament}}</span>
                <p style="font-size:11px;" class="mb-3">{!! nl2br(e(Str::limit($teacher->introsuction, 150))) !!}</p>
                <p style="font-size:11px;">{{$teacher->state}}</p>
                <p style="font-size:11px;">評価：☆☆☆☆</p>
                <p> <a href="{{url('user/teacher_info',$teacher->id)}}">レッスンを見る</p>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div><!-- End -->
        @endforeach
</div>
@endsection
