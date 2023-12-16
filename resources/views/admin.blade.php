@extends('layouts.header')

@section('main')
<h2>Admin</h2>
<form action="" method="get">
  <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">

  <select name="gender">
    <option value="" disabled selected>性別</option>
    <option value="1">男性</option>
    <option value="2">女性</option>
    <option value="3">その他</option>
  </select>

  <select name="category_id">
    <option value="" disabled selected>お問い合わせの種類</option>
    @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->content }}</option>
    @endforeach
  </select>

  <input type="date" name="created_at">
</form>
<div class="admin-button">
  <button>エクスポート</button>
  {{ $contacts->links() }}
</div>
<table>
  <tr>
    <th>お名前</th>
    <th>性別</th>
    <th>メールアドレス</th>
    <th>お問い合わせの種類</th>
    <th></th>
  </tr>
  @foreach($contacts as $contact)
  <tr>
    <td>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
    <td>
      @if($contact['gender'] == 1)
      男性
      @elseif($contact['gender'] == 2)
      女性
      @else
      その他
      @endif
    </td>
    <td>{{ $contact['email'] }}</td>
    <td>{{ $contact->category->content }}</td>
    <td><button>詳細</button></td>
  </tr>
  @endforeach
</table>

@endsection