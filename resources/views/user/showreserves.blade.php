@extends('layouts.user.app')

@section('content')

<div>予約一覧</div>

@foreach($reserves as $reserve)

<p>{{$reserve->id}}</p>

@endforeach