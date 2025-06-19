<table>
    <thead>
        {{-- Logo --}}
        <tr>
            <th colspan="10" style="text-align: center;">
                <img src="{{ public_path('img/pntl.png') }}" style="height: 60px;">
            </th>
        </tr>

        {{-- Header Teks --}}
        <tr>
            <th colspan="10" style="text-align: center; font-size: 12px; font-weight: bold;">
                POLISIA NASIONAL TIMOR LESTE
            </th>
        </tr>
        <tr>
            <th colspan="10" style="text-align: center; font-size: 12px; font-weight: bold;">
                KOMANDU JERAL
            </th>
        </tr>
        <tr>
            <th colspan="10" style="text-align: center; font-size: 12px; font-weight: bold;">
                KOMANDU PESOAL NO FORMASAUN
            </th>
        </tr>
        <tr>
            <th colspan="10" style="text-align: center; font-size: 12px; font-weight: bold;">
                DEPARTAMENTU PESOAL
            </th>
        </tr>

        {{-- Spasi --}}
        <tr><th colspan="10"></th></tr>

        {{-- Judul Laporan --}}
        <tr>
            <th colspan="10" style="text-align: left; font-size: 12px; font-weight: bold;">
                Relatoriu Kursu Rai Laran {{ $monthYear }}
            </th>
        </tr>

        {{-- Header Tabel --}}
        <tr style="background-color: #ADD8E6;">
            <th style="border: 1px solid #000; padding: 6px;">Nu</th>
            <th style="border: 1px solid #000; padding: 6px;">Naran</th>
            <th style="border: 1px solid #000; padding: 6px;">Diviza</th>
            <th style="border: 1px solid #000; padding: 6px;">Unidade</th>
            <th style="border: 1px solid #000; padding: 6px;">Departamentu</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index => $item)
            <tr>
                <td style="border: 1px solid #000; padding: 6px;">{{ $index + 1 }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->naran }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->diviza }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->unidade }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->departamentu }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
