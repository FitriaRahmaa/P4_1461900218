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

    <a href="/buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
    <a class="tambah" href="{{route( 'rak_buku.create')}}">
        Tambah Data </a>
        <table border="1">
            <thead>
                <tr>
                <th>Id</th>
                <th>Id Buku</th>
                <th>Id Jenis Buku</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($rak_buku as $rb)

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$rb->id_buku}}</td>
                        <td>{{$rb->id_jenis_buku}}</td>
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
