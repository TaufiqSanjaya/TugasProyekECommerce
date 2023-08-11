<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Belajar Laravel 9</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main style="margin-top: 70px">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 mb-2">
            <form action="" method="GET" role="search">
                <div class="input-gorup">
                    <input type="text" class="form-control" name="q" value="{{ @$q}}">
                </div>
            </form>
        </div>
            <div class="col-lg-12">
            <div class="col-lg-8 text-end mg-2">
                <a href="{{ url('produk/create') }}" class="btn btn-primary"> Tambah</a>
                </div>

        @if (session('succes'))
            <div class="alert alert-succes">
        {{ session('succes') }}
            </div>
        @endif

        <table class="table">
            <thread>
            <tr>
                <th>No</th>
                <th>Foto Produk</th>
                <th>Kategori Produk</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga Produk</th>
                <th>Aksi</th>
            </tr>
            </thread>

            <tbody>
                @forearch($result as $item)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ $item->foto_produk) }}" alt="Foto" width="100px">
                </td>
                <td>{{ $item->kategori_produk }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->harga_produk }}</td>
                <td>
                    <a href="{{ route('produk.edit', $item->id) }}">dit</a>
                    <form action="{{ route('produk.destroy', $item->id)  }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Hapus"/>
                    </form>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
            {!! $result->withQueryString()->links('pagination::Bootstrap-5') !!}
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm?sweetalert2@11"></script>
<script>
    $(() ->{
        $("body") .on("click", ".formDelete", (el) -> {
            el.preventDefault();

            Swal.fire({
                title             : 'Perhatikan',
                text              : "Apakah anda yakin ingin menghapus data ini>",
                icon              : 'warning',
                showCancelButton  : true,
                confirmButtonColor: '#d33',
                cancelButtonColor : '#3085d6',
                confirmButtonText : 'ya',
                cancelButtonText  : 'tidak'
            }).then((result) -> {
                if(result.isConfirmed) $(el>currentTarget).submit();
            })
        })
    
    })
</script>
</body>
</html>