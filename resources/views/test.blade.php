<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>test</title>
</head>
<body>

  <h1>HELLO TEST excel</h1>

  <form action="testimport" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    匯入檔案:
    <input type="file" name="xlsx" id="">

    {{-- <input type="text" name="name" id=""> --}}
    <button type="submit">匯入</button>
  </form>
  
</body>
</html>