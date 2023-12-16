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
    <td><button onclick="openModal('{{ $contact->id }}')">詳細</button></td>
  </tr>
  @endforeach
</table>

@foreach($contacts as $contact)
<div id="contactModal{{ $contact->id }}" class="modal" style="display: none;">
  <button class="closeModalBtn" onclick="closeModal('{{ $contact->id }}')">&times; 閉じる</button>
  <table>
    <tr>
      <th>お名前</th>
      <td>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
    </tr>
    <tr>
      <th>性別</th>
      <td>
        @if($contact['gender'] == 1)
        男性
        @elseif($contact['gender'] == 2)
        女性
        @else
        その他
        @endif
      </td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>{{ $contact['email'] }}</td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td>{{ $contact['tell'] }}</td>
    </tr>
    <tr>
      <th>住所</th>
      <td>{{ $contact['address'] }}</td>
    </tr>
    @isset($contact->building)
    <tr>
      <th>建物名</th>
      <td>{{ $contact['building'] }}</td>
    </tr>
    @endisset
    <tr>
      <th>お問い合わせの種類</th>
      <td>{{ $contact->category->content }}</td>
    </tr>
    <tr>
      <th>お問い合わせの内容</th>
      <td>{{ $contact['detail'] }}</td>
    </tr>
  </table>
  <form action="">
    @csrf
    <input type="hidden" name="id" value="{{ $contact->id }}">
    <button>削除</button>
  </form>
</div>
@endforeach

<script>
  // モーダルを表示する関数
  function openModal(contactId) {
    document.getElementById("contactModal" + contactId).style.display = "block";
  }

  // モーダルを非表示にする関数
  function closeModal(contactId) {
    document.getElementById("contactModal" + contactId).style.display = "none";
  }
</script>
@endsection