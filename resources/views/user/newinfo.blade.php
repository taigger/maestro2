@extends('layouts.teacher.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ユーザー情報登録</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{ url('teacher.newinfo') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="mb-3 mt-3">
                 <label for="exampleFormControlTextarea1" class="form-label">氏名</label>
                <input type="text" name="nick_name" class="form-control mb-2" id="exampleFormControlInput1" placeholder="苗字">
                <input type="text" name="nick_name" class="form-control" id="exampleFormControlInput1" placeholder="名前">
                </div>
                <!--<div class="mb-3">-->
                <!-- <label for="exampleFormControlTextarea1" class="form-label">生まれ年</label>-->
                <!--<select name="birth" class="form-control">-->
                <!--    <option hidden>生まれた年</option>-->
                <!--    <option value="">-</option>-->
                <!--    <option value="1920">1920</option>-->
                <!--    <option value="1921">1921</option>-->
                <!--    <option value="1922">1922</option>-->
                <!--    <option value="1923">1923</option>-->
                <!--    <option value="1924">1924</option>-->
                <!--    <option value="1925">1925</option>-->
                <!--    <option value="1926">1926</option>-->
                <!--    <option value="1927">1927</option>-->
                <!--    <option value="1928">1928</option>-->
                <!--    <option value="1929">1929</option>-->
                <!--    <option value="1930">1930</option>-->
                <!--    <option value="1931">1931</option>-->
                <!--    <option value="1932">1932</option>-->
                <!--    <option value="1933">1933</option>-->
                <!--    <option value="1934">1934</option>-->
                <!--    <option value="1935">1935</option>-->
                <!--    <option value="1936">1936</option>-->
                <!--    <option value="1937">1937</option>-->
                <!--    <option value="1938">1938</option>-->
                <!--    <option value="1939">1939</option>-->
                <!--    <option value="1940">1940</option>-->
                <!--    <option value="1941">1941</option>-->
                <!--    <option value="1942">1942</option>-->
                <!--    <option value="1943">1943</option>-->
                <!--    <option value="1944">1944</option>-->
                <!--    <option value="1945">1945</option>-->
                <!--    <option value="1946">1946</option>-->
                <!--    <option value="1947">1947</option>-->
                <!--    <option value="1948">1948</option>-->
                <!--    <option value="1949">1949</option>-->
                <!--    <option value="1950">1950</option>-->
                <!--    <option value="1951">1951</option>-->
                <!--    <option value="1952">1952</option>-->
                <!--    <option value="1953">1953</option>-->
                <!--    <option value="1954">1954</option>-->
                <!--    <option value="1955">1955</option>-->
                <!--    <option value="1956">1956</option>-->
                <!--    <option value="1957">1957</option>-->
                <!--    <option value="1958">1958</option>-->
                <!--    <option value="1959">1959</option>-->
                <!--    <option value="1960">1960</option>-->
                <!--    <option value="1961">1961</option>-->
                <!--    <option value="1962">1962</option>-->
                <!--    <option value="1963">1963</option>-->
                <!--    <option value="1964">1964</option>-->
                <!--    <option value="1965">1965</option>-->
                <!--    <option value="1966">1966</option>-->
                <!--    <option value="1967">1967</option>-->
                <!--    <option value="1968">1968</option>-->
                <!--    <option value="1969">1969</option>-->
                <!--    <option value="1970">1970</option>-->
                <!--    <option value="1971">1971</option>-->
                <!--    <option value="1972">1972</option>-->
                <!--    <option value="1973">1973</option>-->
                <!--    <option value="1974">1974</option>-->
                <!--    <option value="1975">1975</option>-->
                <!--    <option value="1976">1976</option>-->
                <!--    <option value="1977">1977</option>-->
                <!--    <option value="1978">1978</option>-->
                <!--    <option value="1979">1979</option>-->
                <!--    <option seleced="1980">1980</option>-->
                <!--    <option value="1981">1981</option>-->
                <!--    <option value="1982">1982</option>-->
                <!--    <option value="1983">1983</option>-->
                <!--    <option value="1984">1984</option>-->
                <!--    <option value="1985">1985</option>-->
                <!--    <option value="1986">1986</option>-->
                <!--    <option value="1987">1987</option>-->
                <!--    <option value="1988">1988</option>-->
                <!--    <option value="1989">1989</option>-->
                <!--    <option value="1990">1990</option>-->
                <!--    <option value="1991">1991</option>-->
                <!--    <option value="1992">1992</option>-->
                <!--    <option value="1993">1993</option>-->
                <!--    <option value="1994">1994</option>-->
                <!--    <option value="1995">1995</option>-->
                <!--    <option value="1996">1996</option>-->
                <!--    <option value="1997">1997</option>-->
                <!--    <option value="1998">1998</option>-->
                <!--    <option value="1999">1999</option>-->
                <!--    <option value="2000">2000</option>-->
                <!--    <option value="2001">2001</option>-->
                <!--    <option value="2002">2002</option>-->
                <!--    <option value="2003">2003</option>-->
                <!--    <option value="2004">2004</option>-->
                <!--    <option value="2005">2005</option>-->
                <!--    <option value="2006">2006</option>-->
                <!--    <option value="2007">2007</option>-->
                <!--    <option value="2008">2008</option>-->
                <!--    <option value="2009">2009</option>-->
                <!--    <option value="2010">2010</option>-->
                <!--    <option value="2011">2011</option>-->
                <!--    <option value="2012">2012</option>-->
                <!--    <option value="2013">2013</option>-->
                <!--    <option value="2014">2014</option>-->
                <!--    <option value="2015">2015</option>-->
                <!--    <option value="2016">2016</option>-->
                <!--    <option value="2017">2017</option>-->
                <!--    <option value="2018">2018</option>-->
                <!--    <option value="2019">2019</option>-->
                <!--    <option value="2020">2020</option>-->
                <!--    <option value="2021">2021</option>-->
                <!--    <option value="2022">2022</option>-->
                <!--    <option value="2023">2023</option>-->
                <!--    <option value="2024">2024</option>-->
                <!--    <option value="2025">2025</option>-->
                <!--    <option value="2026">2026</option>-->
                <!--    <option value="2027">2027</option>-->
                <!--    <option value="2028">2028</option>-->
                <!--    <option value="2029">2029</option>-->
                <!--    <option value="2030">2030</option>-->
                <!--    </select>-->
                <!--</div>-->
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
                 <label for="exampleFormControlTextarea1" class="form-label">楽器経験</label>
                 <input type="text" name="instrament" class="form-control" id="exampleFormControlInput1" placeholder="楽器経験 ありorなし　ある場合は楽器名と経験年数を記入">
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
                <label for="exampleFormControlTextarea1" class="form-label">自己紹介</label>
                <textarea class="form-control" name="user_coment" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="送信">
            </form>
           
        </div>
    
    </div>
</div>
@endsection