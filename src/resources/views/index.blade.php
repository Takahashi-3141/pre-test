<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Contact</title>
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>
            <form class="from" action="/confirm" method="post">
                @csrf
                <!-- <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
        </div> -->


                <nobr>

                    <label for="name">
                        <label>お名前 ※</label>
                        <input type="text" name="last_name" id="last_name" placeholder="例: 山田"
                            value="{{ old('last_name') }}">
                        <input type="text" name="first_name" id="first_name" placeholder="例: 太郎"
                            value="{{ old('first_name') }}"><br />
                </nobr>

                <br>
                </br>
                <nobr>
                    <label>性別 ※</label>
                    <input type="radio" name="gender" value="1"> 男性
                    <input type="radio" name="gender" value="2"> 女性
                    <input type="radio" name="gender" value="3"> その他
                    <br />
                </nobr>

                <br>
                </br>
                <nobr>
                    <label for="email">メールアドレス ※</label>
                    <input type="email" name="email" id="email" placeholder="例: test@example.com"><br />
                </nobr>

                <br>
                </br>
                <nobr>
                    <label for="phone">電話番号 ※</label>
                    <input type="text" name="phone1" id="phone1" placeholder="080"> -
                    <input type="text" name="phone2" id="phone2" placeholder="1234"> -
                    <input type="text" name="phone3" id="phone3" placeholder="5678"><br />
                </nobr>

                <br>
                </br>
                <label for="address">住所 ※</label>
                <input type="text" name="address" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"><br />

                <br>
                </br>
                <label for="building">建物名</label>
                <input type="text" name="building" id="building" placeholder="例: 千駄ヶ谷マンション101"><br />

                <br>
                </br>
                <label for="category_id">お問い合わせの種類 ※</label>
                <select name="category_id" id="category_id">
                    <option value="">選択してください</option>
                    <option value="1">content(質問)</option>

                </select><br />

                <br>
                </br>
                <label for="detail">お問い合わせ内容 ※</label>

                <textarea name="detail" id="detail" placeholder="お問い合わせ内容をご記載ください"></textarea><br />
                <button type="submit">確認画面</button>
            </form>
    </main>
</body>

</html>