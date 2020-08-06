<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>공지사항</title>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<style>
    a:link { color: black; text-decoration: none;}
    a:visited { color: black; text-decoration: none;}
    a:hover { color: black; text-decoration: underline;}
</style>
<body>

@if (session('alert'))
    <script>
    alert("{{ session('alert') }}");
    </script>
@endif

<div class="container">
<br><br><h1><a href="/main/index">Notice List</a></h1><br><br>
    <div align=center>
        <br><h3>Password Check Please!</h3>
        <h7>글을 작성했을때 사용한 암호를 입력해주세요.</h7><br><br><br>
        {{ Form::open(['method'=>'POST', 'action'=>['NoticeController@check',$notices->id], 'id'=>'form', 'name'=>'form']) }}
        <div>
            <input type="password" name="pw" id="pw">
        </div><br>
            <button type="submit" class="btn btn-primary">확인</button>        
        {{ Form::close() }}
    </div>
</div>
</body>
</html>