<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>姓名</th>
            <th>總薪資</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alls as $all)
            <tr>
                <td>{{ $all->name }}</td>
                <td>{{ $all->total_wage }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>