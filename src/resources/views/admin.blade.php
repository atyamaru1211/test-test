<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <!--Inikaのフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <p class="header__logo">
                FashionablyLate
            </p>
            <a class="header__logout-button" href="/">logout</a>
        </div>
    </header>

    <main>
        <div class="admin-form__content">
            <div class="admin-form__heading">
                <span>Admin</span>
            </div>

            <form class="admin__search-form">
                <div class="admin__search-fields">
                    <div class="admin__search-input-wrapper">
                        <input class="admin__search-input" type="text" name="search-name-email" placeholder="名前やメールアドレスを入力してください">
                    </div>
                    <div class="admin__search-select-wrapper">
                        <select class="admin__search-select" name="gender">
                            <option>性別</option>
                            <option value="全て">全て</option>
                            <option value="男性">男性</option>
                            <option value="女性">女性</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="admin__search-select-wrapper">
                        <select class="admin__search-select" name="inquiry-type">
                            <option value="">お問い合わせの種類</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="admin__search-input-wrapper">
                        <input class="admin__search-input" type="date" name="date">
                    </div>
                    <div class="admin__search-button">
                        <button class="admin__search-button-submit" type="submit">検索</button>
                    </div>
                    <div class="admin__reset">
                        <a class="admin__reset-button" href="/">リセット</a>
                    </div>
                </div></

            <div class="customer-admin__search-buttons">
                <button type="submit" class="customer-admin__search-button">検索</button>
                <a class="customer-admin__reset-button">リセット</a>
            </div>
        </div>
    </form>

    <a class="admin__export-button">エクスポート</a>

    <table class="admin__table">
        <thead>
            <tr>
                <th class="admin__table-header">お名前</th>
                <th class="admin__table-header">性別</th>
                <th class="admin__table-header">メールアドレス</th>
                <th class="admin__table-header">お問い合わせの種類</th>
                <th class="admin__table-header"></th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="admin__table-cell">name</td>
                    <td class="admin__table-cell">gender</td>
                    <td class="admin__table-cell">email</td>
                    <td class="admin__table-cell">e</td>
                    <td class="admin__table-cell">
                        <a class="admin__detail-link">詳細</a>
                    </td>
                </tr>
        </tbody>
    </table>

    <div class="customer-admin__pagination">
    </div>
</body>
</html>