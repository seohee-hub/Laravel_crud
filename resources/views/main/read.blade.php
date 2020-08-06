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

@if(Session::has('guest')) 
    <script>
        @if(Session('guest') != 'yes')
            location.href="/main/{{ $notices->id }}/pw";
        @else
            <?php Session()->put('guest', 'no'); ?>
        @endif
    </script>
@else
    <script>
        location.href="/main/{{ $notices->id }}/pw";
    </script>
@endif

<div class="container">
    <br><br><h1><a href="/main/index">Notice List</a></h1><br><br>
    <h7>※ 본인 작성글만 확인/수정/삭제 가능하므로 암호를 기억해주세요.</h7><br><br>
    <div class="container">
        <div class="mb-3">
            <label>작성자</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $notices->name }}" readonly=readonly>
        </div>
        <div class="mb-3">
            <label>제목</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $notices->title }}" readonly=readonly>
        </div>
        <div class="mb-3">
            <label">내용</label>
            <textarea class="form-control" rows="7" name="content" id="content" readonly=readonly>{{ $notices->content }}</textarea>
        </div>
        <div align=right>         
            {{ Form::open(['action' => ['NoticeController@delete', $notices->id], 'method' => 'POST']) }}
            {{ Form::hidden('_method', 'delete') }}
            <a href="/main/{{$notices->id}}/edit" class="btn btn-primary pull-right">수정</a>  
            <button type="submit" class="btn btn-danger pull-right" onclick="if(!confirm('삭제 하시겠습니까?')){return false;}">삭제</button>
            {{ Form::close() }}
            
        </div>
    </div>
</div>
</body>
</html>