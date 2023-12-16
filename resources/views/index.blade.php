@extends('layouts.header')

@section('main')
<h2>Contact</h2>
<form action="{{ route('confirm') }}" method="post">
  @csrf
  <div class="form-group">
    <label>お名前 <span>*</span></label>
    <div class="form-group-name">
      <input type="text" name="first_name" placeholder="例: 山田" value="{{ old('first_name') }}">
      <input type="text" name="last_name" placeholder="例: 太郎" value="{{ old('last_name') }}">
    </div>
    @error('first_name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    @error('last_name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label>性別 <span>*</span></label>
    <div class="form-group-radio">
      <input type="radio" name="gender" value="1" checked><label>男性</label>
      <input type="radio" name="gender" value="2"><label>女性</label>
      <input type="radio" name="gender" value="3"><label>その他</label>
    </div>
    @error('gender')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label>メールアドレス <span>*</span></label>
    <input type="text" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
    @error('email')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label>電話番号 <span>*</span></label>
    <div class="form-group-tel">
      <input type="text" name="first_number" placeholder="080" value="{{ old('first_number') }}">
      <span>-</span>
      <input type="text" name="middle_number" placeholder="1234" value="{{ old('middle_number') }}">
      <span>-</span>
      <input type="text" name="last_number" placeholder="5678" value="{{ old('last_number') }}">
    </div>
    @error('first_number')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    @error('middle_number')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    @error('last_number')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="">住所 <span>*</span></label>
    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
    @error('address')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label for="">建物名</label>
    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="{{ old('building') }}">
  </div>

  <div class="form-group">
    <label>お問い合わせの種類 <span>*</span></label>
    <select name="category_id">
      <option value="">選択してください</option>
      @foreach($categories as $category)
      <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->content }}</option>
      @endforeach
    </select>
    @error('category_id')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label>お問い合わせ内容 <span>*</span></label>
    <textarea class="form-group-detail" name="detail" cols="30" rows="10">{{ old('detail') }}</textarea>
    @error('detail')
    <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="form-group">
    <label></label>
    <input type="submit" value="確認画面">
  </div>
</form>
@endsection