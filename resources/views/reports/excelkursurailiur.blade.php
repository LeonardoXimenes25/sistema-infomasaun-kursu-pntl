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
            <th style="border: 1px solid #000; padding: 6px;">Naran Kursu</th>
            <th style="border: 1px solid #000; padding: 6px;">Tipu Kursu</th>
            <th style="border: 1px solid #000; padding: 6px;">Fatin Kursu</th>
            <th style="border: 1px solid #000; padding: 6px;">Data Hahu</th>
            <th style="border: 1px solid #000; padding: 6px;">Data Remata</th>
            <th style="border: 1px solid #000; padding: 6px;">Fundus Apoiu</th>
            <th style="border: 1px solid #000; padding: 6px;">Feto</th>
            <th style="border: 1px solid #000; padding: 6px;">Mane</th>
            <th style="border: 1px solid #000; padding: 6px;">Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index => $item)
            <tr>
                <td style="border: 1px solid #000; padding: 6px;">{{ $index + 1 }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->naran_kursu }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->tipu_kursu }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->fatin_kursu }}</td>
                <td style="border: 1px solid #000; padding: 6px;">
                    {{ \Carbon\Carbon::parse($item->data_hahu)->format('d-m-Y') }}
                </td>
                <td style="border: 1px solid #000; padding: 6px;">
                    {{ \Carbon\Carbon::parse($item->data_remata)->format('d-m-Y') }}
                </td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->fundus }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->feto }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->mane }}</td>
                <td style="border: 1px solid #000; padding: 6px;">{{ $item->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
