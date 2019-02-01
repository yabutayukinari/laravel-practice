<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>ログインフォーム</h1>
@isset($message)
    <p style="color: red">{{ $message }}</p>
@endisset
<form name="loginform" action="/auth/login" method="post">
    {{ csrf_field() }}
    メールアドレス:<input type="text" name="email" size="30"><span>{{ $errors->first('email') }}</span><br/>
    パスワード:<input type="password" name="password" size="30"><span>{{ $errors->first('password') }}</span><br/>
    <button type="submit" name="action" value="send">ログイン</button>
</form>
</body>
</html>