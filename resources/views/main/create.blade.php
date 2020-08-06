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

@if(session('message'))
    <script>
    alert("{{ session('message') }}");
    </script>
@endif

<div class="container">
<br><br><h1><a href="/main/index">Notice List</a></h1><br><br>
<h7>※ 본인 작성글만 확인/수정/삭제 가능하므로 암호를 기억해주세요.</h7><br><br>
    {{ Form::open(['method'=>'POST', 'action'=>'NoticeController@store', 'id'=>'form', 'name'=>'form']) }}
        <div class="container">
        <div class="mb-3">
            <label>작성자</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="이름을 입력해 주세요">
        </div>
        <div class="mb-3">
            <label>암호</label>
            <input type="password" class="form-control" name="pw" id="pw" placeholder="암호를 입력해 주세요">
        </div>
        <div class="mb-3">
            <label>제목</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="제목을 입력해 주세요">
        </div>
        <div class="mb-3">
            <label">내용</label>
            <textarea class="form-control" rows="7" name="content" id="content" placeholder="내용을 입력해 주세요" ></textarea>
        </div>
        <div align=right>
            <button type="submit" class="btn btn-primary pull-right">등록</button>
            <a href="/main/index" class="btn btn-primary pull-right">목록</a>
        </div>
    </div>
   {{ Form::close() }}
</div>
</body>
</html>