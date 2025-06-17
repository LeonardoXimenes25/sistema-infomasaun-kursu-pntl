<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatoriu Partisipante Rai Laran</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 11px;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        thead th {
            background-color: #ADD8E6; /* Biru langit */
            border: 1px solid #000;
            padding: 6px;
            text-align: center; /* Center hanya untuk thead */
        }

        tbody td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left; /* Tetap kiri untuk tbody */
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70px;
            height: auto;
        }

        .header-text {
            font-size: 12px;
            font-weight: bold;
            margin: 2px 0;
        }

        .title {
            font-size: 13px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="{{ public_path('img/pntl.png') }}" class="logo" alt="PNTL-LOGO">
        <div class="header-text">POLISIA NASIONAL TIMOR LESTE</div>
        <div class="header-text">KOMANDU JERAL</div>
        <div class="header-text">KOMANDU PESOAL NO FORMASAUN</div>
        <div class="header-text">DEPARTAMENTU PESOAL</div>
    </div>

    <div class="report-title">
        Relatoriu Kursu Rai Laran {{ ucfirst($monthYear) }}
    </div>

    <table>
        <thead>
            <tr>
                <th>Nu</th>
                <th>Naran Kursu</th>
                <th>Tipu Kursu</th>
                <th>Fatin Kursu</th>
                <th>Data Hahu</th>
                <th>Data Remata</th>
                <th>Fundus Apoiu</th>
                <th>Feto</th>
                <th>Mane</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->naran_kursu }}</td>
                    <td>{{ $item->tipu_kursu }}</td>
                    <td>{{ $item->fatin_kursu }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->data_hahu)) }}</td>
                    <td>{{ date('d-m-Y', strtotime($item->data_remata)) }}</td>
                    <td>{{ $item->fundus }}</td>
                    <td>{{ $item->feto }}</td>
                    <td>{{ $item->mane }}</td>
                    <td>{{ $item->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
