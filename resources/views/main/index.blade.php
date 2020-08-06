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
<div>
    {{ "안<br>녕"}}
    <br>
    {!! "안<b>냥" !!}
</div>

<div class="container">
<br><br><h1><a href="/main/index">Notice List</a></h1><br><br>
<h7>※ 본인이 작성한 글만 확인할 수 있습니다.</h7><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-m">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>작성시간</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            @foreach ($notices as $list)
                <td width="100"><b>{{ $list -> id }}</b></td>
                <td width="220"><a href="/main/{{ $list->id }}/pw"><b>{{ $list -> title }}</b></td>
                <td width="200"><b>{{ $list -> name }}</b></td>
                <td width="180"><b>{{ $list -> created_at }}</b></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div align=right>
            <a class="btn btn-primary" href='/main/create'>글쓰기</a>
		</div>
    </div>
</div>
</body>
</html>