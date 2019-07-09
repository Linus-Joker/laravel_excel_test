<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>test</title>
</head>
<body>

  <h1>test excel</h1>

  <form action="{{ url('testimport')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        
    匯入excel檔案:
    <input type="file" name="xlsx" id="">

    {{-- <input type="text" name="name" id=""> --}}
    <button type="submit">匯入</button>
  </form>
  <p>A table export</p>
  <button disabled=""><a class="" href="{{ url('testexport') }}">匯出</a></button>

  <p>B table export</p>
  <button disabled=""><a class="" href="{{ url('b') }}">匯出</a></button>
  
</body>
</html>