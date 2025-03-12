<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
    <!--Inikaのフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                FashionablyLate
            </a>
            <a class="header__register" href="/">
                login
            </a>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <span>Register</span>
            </div>
            <form class="form">
                <div class="form__group">
                    <p class="form__group--item">お名前</p>
                    <input class="form__group-input" type="text" placeholder="例: 山田  太郎">
                </div>
                <div class="form__group">
                    <p class="form__group--item">メールアドレス</p>
                    <input class="form__group-input" type="email" placeholder="例: test@example.com">
                </div>
                <div class="form__group">
                    <p class="form__group--item">パスワード</p>
                    <input class="form__group-input" type="text" placeholder="例: coachtech1106">
                </div>
                <div class="form__button">
                    <button class="form__button-submit">登録</button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>


<body>
    </body>