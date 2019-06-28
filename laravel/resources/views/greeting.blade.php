
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

<h1>Hello,{{$greet}}</h1>
<p>メンバー<p>
<div>{{$member}}</div>




<P>社内旅行アンケートにお答えください</p>
<form action="contents" method="POST">
@csrf 
    <div class="form-group">
        <div>{{$name}}</div>
        <label>
            <input type="text" name="name" >
        </label>
    </div>
    <div class="form-group"> 
        <label>  
            <input type="text" name="name" >
        </label>
    </div>
    <div>行きたい旅行地</div>
    <div>{{$select}}
        <input type="radio" name="radio" value="北海道">北海道
        <input type="radio" name="radio" value="京都">京都
        <input type="radio" name="radio" value="沖縄">沖縄
    </div>
    <div>何をしたいか</div>
    <div>{{$select}}
        <input type="checkbox" name="checkbox" value="アクティビティー">アクティビティー
        <input type="checkbox" name="checkbox" value="観光地めぐり">観光地めぐり
        <input type="checkbox" name="checkbox" value="おいしいものツアー">おいしいものツアー
    </div>
    <div>何日間の旅行がいいか</div>
    <div>
        <select name="date">
            <option value="1泊2日">1泊2日</option>
            <option value="2泊3日">2泊3日</option>
            <option value="3泊4日">3泊4日</option>
        </select>
    </div>
    <div>コメントを記入してください</div>
    <div>
        <textarea name="comment"></textarea>
    </div>
    <input type="submit" value="送信">
</form>
</body>
</html>