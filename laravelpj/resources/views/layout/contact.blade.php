@extends('layout.contact')

@section('content')
<form method="POST" action="/contact/confirm">
    @csrf

    <h2 class="titl">お問い合わせ<h2>

    <label>お名前</label>
    <input type="text" class="input-add" name="lastname" placeholder="例）山田" required>
    <input type="text" class="input-add" name="firstname" placeholder="例）太郎" required>

    <label>メールアドレス</label>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="例）test@example.com" required>
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
    @endif

    <label>郵便番号</label>
    <p>〒</p> <input name="postcode" value="{{ old('postcode') }}" type="text" placeholder="例）123-4567" required>

    <label>住所</label>
    <input name="address" value="{{ old('address') }}" type="text" placeholder="例）東京都渋谷区千駄ヶ谷1-2-3" required>

    <label>建物</label>
    <input name="building" value="{{ old('building') }}" type="text" placeholder="例）千駄ヶ谷マンション101" required>

    <label>ご意見</label>
    <input name="opinion" value="{{ old('opinion') }}" type="text" placeholder= ""required>

    <div class="submit-btn">
    <input type="submit" name="submit" value="確認" class="btn-border">
    </div>

    </form>
    @endsection
