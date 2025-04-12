<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
    <header>
        <h1>FashionablyLate</h1>
        <button class="logout">logout</button>
    </header>
    <main>
        <h2>Admin</h2>
        <div class="search-box">
            <input type="text" placeholder="名前やメールアドレスを入力してください">
            <select>
                <option>性別</option>
            </select>
            <select>
                <option>お問い合わせの種類</option>
            </select>
            <select>
                <option>年/月/日</option>
            </select>
            <button class="search">検索</button>
            <button class="reset">リセット</button>
        </div>
        <button class="export">エクスポート</button>
        <table>
            <thead>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <td>山田 太郎</td> -->
                    <td class="confirm-table__text">
                        {{$contact['last_name'] . $contact['first_name']}}
                    </td>
                    <!-- <td>男性</td> -->
                    <td>{{$contact['gender']}}</td>
                    <!-- <td>test@example.com</td> -->
                    <td>{{$contact['email']}}</td>
                    <!-- <td>商品の交換について</td> -->
                    <td>{{$contact['category_id']}}
                    </td>
                    <!-- <td><button class="detail">詳細</button></td> -->
                    <td>{{$contact['detail']}}</td>
                </tr>
                <tr>
                    <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td>
                    <td><button class="detail">詳細</button></td>
                </tr>
                <tr>
                    <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td>
                    <td><button class="detail">詳細</button></td>
                </tr>
                <tr>
                    <td>山田 太郎</td>
                    <td>男性</td>
                    <td>test@example.com</td>
                    <td>商品の交換について</td>
                    <td><button class="detail">詳細</button></td>
                </tr>
            </tbody>
        </table>
        <div class="pagination">
            <button>&lt;</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>&gt;</button>
        </div>
    </main>
</body>

</html>