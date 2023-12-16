@extends('layouts.header')

@section('main')
<h2>Confirm</h2>

<table>
  <tr>
    <th>お名前</th>
    <td>{{ $form['last_name'] }} {{ $form['first_name'] }}</td>
  </tr>

  <tr>
    <th>性別</th>
    <td>
      @if($form['gender'] = 1)
      男性
      @elseif($form['gender'] = 2)
      女性
      @else
      その他
      @endif
    </td>
  </tr>

  <tr>
    <th>メールアドレス</th>
    <td>{{ $form['email'] }}</td>
  </tr>

  <tr>
    <th>電話番号</th>
    <td>{{ $form['first_number'] }}{{ $form['middle_number'] }}{{ $form['last_number'] }}</td>
  </tr>

  <tr>
    <th>住所</th>
    <td>{{ $form['address'] }}</td>
  </tr>

  <tr>
    <th>建物名</th>
    <td>
      @isset($form['building'])
      {{ $form['building'] }}
      @endisset
    </td>
  </tr>

  <tr>
    <th>お問い合せの種類</th>
    <td>{{ $category['content'] }}</td>
  </tr>

  <tr>
    <th>お問い合せ内容</th>
    <td>{{ $form['detail'] }}</td>
  </tr>
</table>

<form action="{{ route('store') }}" method="post">
  @csrf
  <input type="hidden" name="first_name" value="{{ $form['first_name'] }}">
  <input type="hidden" name="last_name" value="{{ $form['last_name'] }}">
  <input type="hidden" name="gender" value="{{ $form['gender'] }}">
  <input type="hidden" name="email" value="{{ $form['email'] }}">
  <input type="hidden" name="first_number" value="{{ $form['first_number'] }}">
  <input type="hidden" name="middle_number" value="{{ $form['middle_number'] }}">
  <input type="hidden" name="last_number" value="{{ $form['last_number'] }}">
  <input type="hidden" name="address" value="{{ $form['address'] }}">
  <input type="hidden" name="building" value="{{ $form['building'] }}">
  <input type="hidden" name="category_id" value="{{ $form['category_id'] }}">
  <input type="hidden" name="detail" value="{{ $form['detail'] }}">

  <input type="submit" name="action" value="修正">
  <input type="submit" name="action" value="送信">
</form>
@endsection