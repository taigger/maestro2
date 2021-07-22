@extends('layouts.teacher.app')

@section('content')

 <div class="card-header">ユーザー登録</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                下記からユーザー登録をお願いします。
                </div>
            </div>
            <form action="{{ url('teacher/newinfo') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="mb-3">
            　　 <labelfor="exampleFormControlTextarea1" class="form-label">性別</label>
            　　<select name="sex" class="form-control">
                　<option hidden>選択してください</option>
                  <option value="男性">男性</option>
                  <option value="女性">女性</option>
                  <option value="その他">その他</option>
                </select>
                </div>
                  <div class="mb-3">
                 <label for="exampleFormControlTextarea1" class="form-label">レッスン可能楽器</label>
                 <select name="intrament" class="form-control" multiple>
                  <option hidden>楽器</option>
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
                  <label for="exampleFormControlTextarea1" class="form-label">居住地</label>
                <select name="state" class="form-control">
                  <option hidden>都道府県</option>
                  <option value="北海道">北海道</option>
                  <option value="青森県">青森県</option>
                  <option value="岩手県">岩手県</option>
                  <option value="宮城県">宮城県</option>
                  <option value="秋田県">秋田県</option>
                  <option value="山形県">山形県</option>
                  <option value="福島県">福島県</option>
                  <option value="茨城県">茨城県</option>
                  <option value="栃木県">栃木県</option>
                  <option value="群馬県">群馬県</option>
                  <option value="埼玉県">埼玉県</option>
                  <option value="千葉県">千葉県</option>
                  <option value="東京都">東京都</option>
                  <option value="神奈川県">神奈川県</option>
                  <option value="新潟県">新潟県</option>
                  <option value="富山県">富山県</option>
                  <option value="石川県">石川県</option>
                  <option value="福井県">福井県</option>
                  <option value="山梨県">山梨県</option>
                  <option value="長野県">長野県</option>
                  <option value="岐阜県">岐阜県</option>
                  <option value="静岡県">静岡県</option>
                  <option value="愛知県">愛知県</option>
                  <option value="三重県">三重県</option>
                  <option value="滋賀県">滋賀県</option>
                  <option value="京都府">京都府</option>
                  <option value="大阪府">大阪府</option>
                  <option value="兵庫県">兵庫県</option>
                  <option value="奈良県">奈良県</option>
                  <option value="和歌山県">和歌山県</option>
                  <option value="鳥取県">鳥取県</option>
                  <option value="島根県">島根県</option>
                  <option value="岡山県">岡山県</option>
                  <option value="広島県">広島県</option>
                  <option value="山口県">山口県</option>
                  <option value="徳島県">徳島県</option>
                  <option value="香川県">香川県</option>
                  <option value="愛媛県">愛媛県</option>
                  <option value="高知県">高知県</option>
                  <option value="福岡県">福岡県</option>
                  <option value="佐賀県">佐賀県</option>
                  <option value="長崎県">長崎県</option>
                  <option value="熊本県">熊本県</option>
                  <option value="大分県">大分県</option>
                  <option value="宮崎県">宮崎県</option>
                  <option value="鹿児島県">鹿児島県</option>
                  <option value="沖縄県">沖縄県</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">経歴</label>
                <textarea class="form-control" name="introsuction" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="送信">
            </form>
           
        </div>
    </div>

@endsection