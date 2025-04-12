<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - Confirm</title>
    <link rel="stylesheet" href="css/confirm.css" />

</head>

<body>
    <div class="container">
        <h1>FashionablyLate</h1>
        <h2>Confirm</h2>
        <table>
            <tr>
                <th>お名前</th>
                <td class="confirm-table__text">
                    {{$contact['last_name'] . $contact['first_name']}}
                </td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{$contact['gender']}}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{$contact['email']}}</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>{{$contact['phone1'] . $contact['phone2'] . $contact['phone3']}}</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>{{$contact['address']}}</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>{{$contact['building']}}</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>{{$contact['category_id']}}
                </td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>{{$contact['detail']}}</td>
            </tr>
        </table>
        <form class="from" action="/create" method="post">
            @csrf
            <input type="hidden" name="last_name" value="{{$contact['last_name']}}">
            <input type="hidden" name="first_name" value="{{$contact['first_name']}}">
            <input type="hidden" name="gender" value="{{$contact['gender']}}">
            <input type="hidden" name="email" value="{{$contact['email']}}">
            <input type="hidden" name="tel" value="{{$contact['phone1'] . $contact['phone2'] . $contact['phone3']}}">
            <input type="hidden" name="address" value="{{$contact['address']}}">
            <input type="hidden" name="building" value="{{$contact['building']}}">
            <input type="hidden" name="category_id" value="{{$contact['category_id']}}">
            <input type="hidden" name="detail" value="{{$contact['detail']}}">
            <div class="buttons">
                <button class="submit">送信</button>
                <button class="edit">修正</button>
            </div>
        </form>
    </div>
</body>

</html>