@extends('layouts.teacher.app')

@section('content')

<div>予約一覧</div>


<table class="table">
 <thead>
    <tr>
      <th scope="col">予約番号</th>
      <th scope="col">ユーザー名</th>
      <th scope="col">メールアドレス</th>
    </tr>
  </thead>
  
  @foreach($reserves as $reserve)
  <tbody>
    <tr>
      <th scope="row">{{$reserve->id}}</th>
      <td>{{$reserve->reserve_name}}</td>
      <td>{{$reserve->reserve_mail}}</td>
    </tr>
 </tbody>

@endforeach

</table>

@endsection