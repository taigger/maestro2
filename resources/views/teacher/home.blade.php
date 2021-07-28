@extends('layouts.teacher.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">先生管理画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card">
                <p><a href="{{url('teacher/newlesson') }}">レッスン情報を登録する</a></p>
                <p><a href="{{url('teacher/newinfo') }}">ユーザー情報を変更する</a></p>
                 <!--<p><a href="{{url('teacher/add') }}">チャットを表示する</a></p>-->
            </div>
        </div>
    </div>
    @foreach($lessons as $lesson)
    <div>
      <div class="card mt-3" style="width: 18rem;">
     <div class="card-body">
    <h5 class="card-title">{{$lesson->title}}</h5>
    <h5 class="card-title">{{$lesson->price}}円</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$lesson->instrament}}</h6>
    <p class="card-text">{{$lesson->coment}}</p>
    <form action="{{ url('teacher/lessondelete/'.$lesson->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">
            削除
        </button>
    </form>
    </div>
    </div>
    </div>
    @endforeach

</div>
@endsection