<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form Test</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        <!-- Contact Form Test -->
      </a>
    </div>
  </header>

  <main>
    @extends('layouts.app')

    @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @endsection

    @section('content')

    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="fullname" value="{{ old('fullname') }}" />
            </div>
            <div class="form__error">
              @error('fullname')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class=form__group>
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <input type="radio" id="male" name="gender" value="{{ old('gender') }}" checked />
              <label for="male">男性</label>
              <input type="radio" id="female" name="gender" value="{{ old('gender') }}" />
              <label for="female">女性</label>
            </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="postcode" value="{{ old('postcode') }}" />
            </div>
            <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
            <div class="form__error">
              @error('postcode')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name" value="{{ old('building_name') }}" />
            </div>
            <div class="form__error">
              @error('building_name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion" value="{{ old('opinion') }}"></textarea>
            </div>
            <div class="form__error">
              @error('opinion')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
    @endsection
  </main>
</body>

</html>