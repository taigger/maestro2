@extends('layouts.user.app')

@section('content')
<div>予約ありがとうございました。</div>

<h4>{{$lesson->title}}</h4>

<p>{{$lesson->price}}円</p>

 <!--<form action="{{url('user/pay') }}" method="POST">-->
 <!--       {{ csrf_field() }}-->
 <!--        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"-->
 <!--            data-key="{{ env('STRIPE_KEY') }}"-->
 <!--            data-amount="100"-->
 <!--            data-name="Stripe決済デモ"-->
 <!--            data-label="決済をする"-->
 <!--            data-description="これはデモ決済です"-->
 <!--            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"-->
 <!--            data-locale="auto"-->
 <!--            data-currency="JPY">-->
 <!--        </script>-->
 <!--   </form>-->


<h3 class="mt=3"><a href="{{url('user/home')}}">ホームへ</a></h3>


@endsection