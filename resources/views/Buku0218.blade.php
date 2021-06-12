<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x: auto">

    <a href="/buku/export" class="btn btn-success my-3" target="_blank">EXPORT</a>

    <a class="tambah" href="{{route( 'buku.create')}}">
        Tambah Data </a>
        <table border="1">
            <thead>
                <tr>
                <th>Id Buku</th>
                <th>Judul Buku</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($buku as $bk)

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$bk->judul}}</td>
                        <td>{{$bk->tahun_terbit}}</td>
                        <td>
                            <a href="#">Edit </a>
                            |
                            <a href="#">Hapus </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
