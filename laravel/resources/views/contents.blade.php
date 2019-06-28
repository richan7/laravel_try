<!--
1.1つのコントローラとBladeテンプレートを使用して、スget, postで値をコントローラに渡してください。
その値をコントローラで加工してBladeテンプレートに戻して表示してください。

-->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">

<title>Laravel practice</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.54/css/bootstrap.min.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com.bootstrap/3.3.5/js"></script>

<h1>送られた内容</h1>

<div>{{$name}}</div>
<div>{{$radio}}</div>
<div>{{$checkbox}}</div>
<div>{{$date}}</div>
<div>{{$comment}}</div>
<article>
<section>
</section>
</article>



</body>
</html>