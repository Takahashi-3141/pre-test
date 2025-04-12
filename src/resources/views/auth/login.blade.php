<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css')}}" />
</head>

<body>
    <header>
        <h1 class="title">FashionablyLate</h1>
        <button class="login-btn">login</button>
    </header>
    <main>
        <h2 class="register-title">Login</h2>
        <div class="register-container">
            <form action="#" method="post">

                <label for="email" class="input-label">メールアドレス</label>
                <input type="email" id="email" name="email" class="input-field" placeholder="例: test@example.com"><br />

                <label for="password" class="input-label">パスワード</label>
                <input type="password" id="password" name="password" class="input-field"
                    placeholder="例: coachetech1106"><br />

                <button type="submit" class="register-btn">ログイン</button>
            </form>
        </div>
    </main>
</body>

</html>