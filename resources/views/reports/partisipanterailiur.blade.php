<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatoriu Partisipante Rai Liur</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    </style>
</head>
<body>
    <h2>Relatoriu Partisipante Rai Liur</h2>
    <table>
        <thead>
            <tr>
                <th>Nu</th>
                <th>Naran</th>
                <th>Diviza</th>
                <th>Unidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->naran }}</td>
                    <td>{{ $item->diviza }}</td>
                    <td>{{ $item->unidade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
