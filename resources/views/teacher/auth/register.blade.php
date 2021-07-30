@extends('layouts.teacher.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Teacher_Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('teacher.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!--<div class="mb-3">-->
                        <!--　　 <label for="exampleFormControlTextarea1" class="form-label">性別</label>-->
                        <!--　　<select name="sex" class="form-control">-->
                        <!--    　<option hidden>選択してください</option>-->
                        <!--      <option value="男性">男性</option>-->
                        <!--      <option value="女性">女性</option>-->
                        <!--      <option value="その他">その他</option>-->
                        <!--    </select>-->
                        <!--    </div>-->
                        <!--      <div class="mb-3">-->
                        <!--     <label for="exampleFormControlTextarea1" class="form-label">レッスン可能楽器</label>-->
                        <!--     <select name="instrament" class="form-control" multiple>-->
                        <!--      <option hidden>楽器</option>-->
                        <!--      <option value="violin">violin</option>-->
                        <!--      <option value="viola">viola</option>-->
                        <!--      <option value="cello">cello</option>-->
                        <!--      <option value="contrabass">contrabass</option>-->
                        <!--      <option value="trampet">trampet</option>-->
                        <!--      <option value="horn">horn</option>-->
                        <!--      <option value="horn">trombone</option>-->
                        <!--      <option value="horn">tuba</option>-->
                        <!--      <option value="flute">flute</option>-->
                        <!--      <option value="oboe">oboe</option>-->
                        <!--      <option value="clarinet">clarinet</option>-->
                        <!--      <option value="faggot">faggot</option>-->
                        <!--    </select>-->
                        <!--     </div>-->
                        <!--      <div class="mb-3">-->
                        <!--      <label for="exampleFormControlTextarea1" class="form-label">居住地</label>-->
                        <!--    <select name="state" class="form-control">-->
                        <!--      <option hidden>都道府県</option>-->
                        <!--      <option value="北海道">北海道</option>-->
                        <!--      <option value="青森県">青森県</option>-->
                        <!--      <option value="岩手県">岩手県</option>-->
                        <!--      <option value="宮城県">宮城県</option>-->
                        <!--      <option value="秋田県">秋田県</option>-->
                        <!--      <option value="山形県">山形県</option>-->
                        <!--      <option value="福島県">福島県</option>-->
                        <!--      <option value="茨城県">茨城県</option>-->
                        <!--      <option value="栃木県">栃木県</option>-->
                        <!--      <option value="群馬県">群馬県</option>-->
                        <!--      <option value="埼玉県">埼玉県</option>-->
                        <!--      <option value="千葉県">千葉県</option>-->
                        <!--      <option value="東京都">東京都</option>-->
                        <!--      <option value="神奈川県">神奈川県</option>-->
                        <!--      <option value="新潟県">新潟県</option>-->
                        <!--      <option value="富山県">富山県</option>-->
                        <!--      <option value="石川県">石川県</option>-->
                        <!--      <option value="福井県">福井県</option>-->
                        <!--      <option value="山梨県">山梨県</option>-->
                        <!--      <option value="長野県">長野県</option>-->
                        <!--      <option value="岐阜県">岐阜県</option>-->
                        <!--      <option value="静岡県">静岡県</option>-->
                        <!--      <option value="愛知県">愛知県</option>-->
                        <!--      <option value="三重県">三重県</option>-->
                        <!--      <option value="滋賀県">滋賀県</option>-->
                        <!--      <option value="京都府">京都府</option>-->
                        <!--      <option value="大阪府">大阪府</option>-->
                        <!--      <option value="兵庫県">兵庫県</option>-->
                        <!--      <option value="奈良県">奈良県</option>-->
                        <!--      <option value="和歌山県">和歌山県</option>-->
                        <!--      <option value="鳥取県">鳥取県</option>-->
                        <!--      <option value="島根県">島根県</option>-->
                        <!--      <option value="岡山県">岡山県</option>-->
                        <!--      <option value="広島県">広島県</option>-->
                        <!--      <option value="山口県">山口県</option>-->
                        <!--      <option value="徳島県">徳島県</option>-->
                        <!--      <option value="香川県">香川県</option>-->
                        <!--      <option value="愛媛県">愛媛県</option>-->
                        <!--      <option value="高知県">高知県</option>-->
                        <!--      <option value="福岡県">福岡県</option>-->
                        <!--      <option value="佐賀県">佐賀県</option>-->
                        <!--      <option value="長崎県">長崎県</option>-->
                        <!--      <option value="熊本県">熊本県</option>-->
                        <!--      <option value="大分県">大分県</option>-->
                        <!--      <option value="宮崎県">宮崎県</option>-->
                        <!--      <option value="鹿児島県">鹿児島県</option>-->
                        <!--      <option value="沖縄県">沖縄県</option>-->
                        <!--    </select>-->
                        <!--      </div>-->
                        <!--    <div class="mb-3">-->
                        <!--    <label for="exampleFormControlTextarea1" class="form-label">経歴</label>-->
                        <!--    <textarea class="form-control" name="introsuction" id="exampleFormControlTextarea1" rows="10"></textarea>-->
                        <!--    </div>-->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                </div>
                            </div>
                   
                        <!--</div>-->
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection