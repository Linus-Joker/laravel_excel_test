<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <table>
        <thead>
        <tr>
            <th>姓名</th>
            <th>時薪</th>
            <th>時數</th>
            <th>總薪資</th>
            <th>創建日期</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alls as $all)
            <tr>
                <td>{{ $all->name }}</td>
                <td>{{ $all->hourly_wage }}</td>
                <td>{{ $all->hours }}</td>
                <td>{{ $all->total_wage }}</td>
                <td>{{ $all->createDate }}</td>
            </tr>
        @endforeach
        </tbody>
    </table> --}}

    <table>
        <thead>
        <tr>
            <th>姓名</th>
            <th>性別</th>
            <th>密碼</th>
            <th>電話</th>
            <th>電子郵件</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alls as $all)
            <tr>
                <td>{{ $all->name }}</td>
                <td>{{ $all->gender }}</td>
                <td>{{ $all->password }}</td>
                <td>{{ $all->phone }}</td>
                <td>{{ $all->mail }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>