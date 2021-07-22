@extends('layouts.teacher.app')

@section('content')

<div class="container">
<div class="row justify-content-center">
 <div class="card-header">ユーザー登録</div>
            <div class="card-body">
                <div class="mb-3">
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                新規レッスン登録
                </div>
            <form action="{{ url('teacher/newlesson') }}" method="POST" class="form-horizontal">
                @csrf
               <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="form-label">レッスンタイトル</label>
                 <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="タイトルを入力">
                </div>
                <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="form-label">値段</label>
                 <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="円">
                </div>
                <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="col-md-4 col-form-label text-md-right">レッスン可能楽器</label>
                 <select name="instrament" class="col-md-4 col-form-label text-md-right">
                  <option hidden>レッスン楽器</option>
                  <option value="violin">violin</option>
                  <option value="viola">viola</option>
                  <option value="cello">cello</option>
                  <option value="contrabass">contrabass</option>
                  <option value="trampet">trampet</option>
                  <option value="horn">horn</option>
                  <option value="horn">trombone</option>
                  <option value="horn">tuba</option>
                  <option value="flute">flute</option>
                  <option value="oboe">oboe</option>
                  <option value="clarinet">clarinet</option>
                  <option value="faggot">faggot</option>
                </select>
                 </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">レッスン概要</label>
                <textarea class="form-control" name="coment" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="登録">
            </form>
           </div>
        </div>
    </div>

@endsection