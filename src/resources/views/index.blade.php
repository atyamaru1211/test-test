<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <!--Inikaのフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>

            <form class="form">
                <div class="form__group">
                    <!-- お名前 -->
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="last-name" placeholder="例: 山田" value="{{ old('last-name') }}">
                            <input type="text" name="first-name" placeholder="例: 太郎" value="{{ old('first-name') }}">
                        </div>
                        <!--あとでエラーメッセージ入れる-->
                    </div>
                </div>

                <!-- 性別 -->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input-radio">
                            <label class="gender__radio">
                                <input type="radio" name="gender" value="男性" checked>
                                <span class="gender__radio-mark"></span> 男性
                            </label>
                            <label class="gender__radio">
                                <input type="radio" name="gender" value="女性">
                                <span class="gender__radio-mark"></span> 女性
                            </label>
                            <label class="gender__radio">
                                <input type="radio" name="gender" value="その他">
                                <span class="gender__radio-mark"></span> その他
                            </label>
                        </div>
                    </div>
                </div>

                <!--メールアドレス-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}">
                        </div>
                        <!--エラーを書く-->
                    </div>
                </div>

                <!--電話番号-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel-1" placeholder="080" value="{{ old('tel-1') }}">
                            <span class="hyphen">-</span>
                            <input type="tel" name="tel-2" placeholder="1234" value="{{ old('tel-2') }}">
                            <span class="hyphen">-</span>
                            <input type="tel" name="tel-3" placeholder="5678" value="{{ old('tel-3') }}">
                        </div>
                        <!--エラー-->
                    </div>
                </div>
                
                <!--住所-->
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="adress" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                        </div>
                        <!--エラー-->
                    </div>
                </div>
                
                <!--建物名-->
                <div class="form__group">
                    <div class="form__group--title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
                        </div>
                    </div>
                </div>

                <!--問い合わせの種類-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__select">
                        <select class="form__select-type">
                            <option value="delivery">商品のお届けについて</option>
                            <option value="exchange">商品の交換について</option>
                            <option value="trouble">商品トラブル</option>
                            <option value="shop">ショップへのお問い合わせ</option>
                            <option value="other">その他</option>
                        </select>
                        <span class="select__arrow"></span>
                        <!--エラー-->
                    </div>
                </div>

                <!--お問い合わせ内容-->
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <!--エラー-->
                    </div>
                </div>
                <!--送信ボタン-->
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>


           <!--
            <div class="form-group">
                <label>電話番号 <span class="required">※</span></label>
                <div class="tel-inputs">
                    <input type="text" id="tel1" name="tel1" placeholder="080" required>
                    <span>-</span>
                    <input type="text" id="tel2" name="tel2" placeholder="1234" required>
                    <span>-</span>
                    <input type="text" id="tel3" name="tel3" placeholder="5678" required>
                </div>
                <p class="error-message" id="tel-error"></p>
            </div> -->

