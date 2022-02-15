@extends('layout.confirm')

@section('content')
<form method="POST" action="/contact/send">
    @csrf

    <label>お名前<label>
        {{ $inputs['name']}}
        <input name="name" value="{{$inputs['name']}}" type="hidden">

        <label>メールアドレス<label>
        {{ $inputs['email']}}
        <input name="email" value="{{$inputs['email']}}" type="hidden">

        <label>メールアドレス<label>
        {{ $inputs['email']}}
        <input name="email" value="{{$inputs['email']}}" type="hidden">

        <label>郵便番号<label>
        {{ $inputs['postcode']}}
        <input name="postcode" value="{{$inputs['postcode']}}" type="hidden">

        <label>建物<label>
        {{ $inputs['building']}}
        <input name="building" value="{{$inputs['building']}}" type="hidden">

        <labelご意見<label>
        {{ $inputs['opinion']}}
        <input name="opinion" value="{{$inputs['opinion']}}" type="hidden">

    <button type="submit" name="action" value="submit">
        送信する
    </button>
    <button type="submit" name="action" value="back">
        修正する
    </button>
</form>
@endsection