<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Nota Peminjaman</h1>
        <h2>Perpustakaan Read-It</h2>
        <h4>================================</h4>
        <br>
        <h3>Atas Nama : {{ auth()->user()->name }}</h3>
        <table border="1" style="width: 40%">
            <thead>
                <tr>
                    <th class="text-center">
                        #
                    </th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Terbit</th>
                    <th>Lama Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Biaya</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjaman as $p)
                @if ($p->user->id == Auth::user()->id)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td>{{$p->judul}}</td>
                    <td>{{$p->kategori}}</td>
                    <td>{{$p->penulis}}</td>
                    <td>{{$p->tahun}}</td>
                    <td>{{$p->terbit}}</td>
                    <td>{{$p->lamaPinjam}}</td>
                    <td>{{$p->created_at}}</td>
                    <td>
                        <div class="badge badge-success">Rp.{{$p->biaya * $p->lamaPinjam}}</div>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <br>
        <br>
        <br>
        Tanda Tangan Petugas :
        <br>
        <br>
        <br>
        <h4>---------------------------</h4>
        <script>
            window.print();
        </script>

    </center>
</body>

</html>
