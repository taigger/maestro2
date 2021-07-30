@extends('layouts.user.app')

@section('content')

<div>
    <div>
        <h2 class="ml-3">先生詳細</h2>
        <table class="table-responsive ml-4">
          <tr>
            <th>名前:</th>
            <td>{{$teacher->name}}</td>
          </tr>
          <tr>
            <th>楽器:</th>
            <td>{{$teacher->instrament}}</td>
          </tr>
          <tr>
            <th>場所:</th>
            <td>{{$teacher->state}}</td>
          </tr>
        </table>
              <div class="ml-3 mt-3">
                <h4>経歴</h4>
                <div style="width:20rem">{{$teacher->introsuction}}</div>
              </div>
     <div>
    @foreach($lessons as $lesson)
    <div class="card mt-3 ml-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$lesson->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$lesson->instrament}}</h6>
        <p class="card-text">{{$lesson->price}}円</p>
        <p class="card-text">{{$lesson->coment}}</p>
        <!--<p  class="card-text" ><a href="{{url('user/add',$teacher->id)}}">メッセージを送信する</a></p>-->
         <p><a href="{{url('user/reserve',$lesson->id)}}">予約する</a></p>
        <div>
        <!--<form action="ethod="POST">-->
        <!--{{ csrf_field() }}-->
        <!-- <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"-->
        <!--     data-key=
        <!--     data-amount="100"-->
        <!--     data-name="Stripe決済デモ"-->
        <!--     data-label="決済をする"-->
        <!--     data-description="これはデモ決済です"-->
        <!--     data-image="https://stripe.com/img/documentation/checkout/marketplace.png"-->
        <!--     data-locale="auto"-->
        <!--     data-currency="JPY">-->
        <!-- </script>-->
        <!--</form>-->
        </div>
    </div>
    </div>
    @endforeach

    
    </div>
    
    
</div>




@endsection