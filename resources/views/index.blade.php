@extends('layouts.header')

@section('main')
<h2>Contact</h2>
<form action="">
  <div class="form-group">
    <label>お名前 <span>*</span></label>
    <div class="form-group-name">
      <input type="text" name="first_name" placeholder="例: 山田">
      <input type="text" name="last_name" placeholder="例: 太郎">
    </div>
  </div>

  <div class="form-group">
    <label>性別 <span>*</span></label>
    <div class="form-group-radio">
      <input type="radio" name="gender" value="1" checked><label>男性</label>
      <input type="radio" name="gender" value="2"><label>女性</label>
      <input type="radio" name="gender" value="3"><label>その他</label>
    </div>
  </div>

  <div class="form-group">
    <label>メールアドレス <span>*</span></label>
    <input type="text" name="email" placeholder="例: test@example.com">
  </div>

  <div class="form-group">
    <label>電話番号 <span>*</span></label>
    <div class="form-group-tel">
      <input type="text" name="first_number" placeholder="080"> -
      <input type="text" name="middle_number" placeholder="1234"> -
      <input type="text" name="last_number" placeholder="5678">
    </div>
  </div>

  <div class="form-group">
    <label for="">住所 <span>*</span></label>
    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
  </div>

  <div class="form-group">
    <label for="">建物名</label>
    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
  </div>

  <div class="form-group">
    <label>お問い合わせの種類 <span>*</span></label>
    <select name="category_id">
      <option>選択してください</option>
      @foreach($categories as $category)
      <option value="$category->id">{{$category->content}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label>お問い合わせ内容 <span>*</span></label>
    <textarea class="form-group-detail" name="detail" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label></label>
    <input type="button" value="確認画面">
  </div>
</form>
@endsection