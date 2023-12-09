@extends('master2')
@section('title', 'Database sandal')

@section('judul_halaman')

    <h2>www.malasngoding.com</h2>
    <h3>Data sandal</h3>

    <a href="/sandal/tambahSandal"> + Tambah sandal Baru</a>

    <br />
    <br />
@endsection

@section('konten')

    <p>Cari Data sandal :</p>
    <form action="/sandal/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari sandal berdasarkan merk .."
            value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>

    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>Kode Sandal</th>
            <th>Merk Sandal</th>
            <th>Stock Sandal</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sandal as $s)
            <tr style="text-align: center;">
                <td>{{ $s->kodesandal }}</td>
                <td>{{ $s->merksandal }}</td>
                <td>{{ $s->stocksandal }}</td>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

                <td style="text-align: center;">
                    <div class="custom-checkbox"
                        style="border: 2px solid {{ $s->tersedia == 'Y' ? 'green' : 'red' }}; border-radius: 10px; margin-top: 3px; background-color: {{ $s->tersedia == 'Y' ? 'lightgreen' : 'lightcoral' }};">
                        <label for="customCheckbox{{ $s->kodesandal }}"
                            style="color: {{ $s->tersedia == 'Y' ? 'green' : 'red' }};">
                            {{ $s->tersedia == 'Y' ? 'Y' : 'N' }}
                        </label>
                        <input type="checkbox" {{ $s->tersedia == 'Y' ? 'checked' : '' }} disabled
                            id="customCheckbox{{ $s->kodesandal }}">
                        <label for="customCheckbox{{ $s->kodesandal }}">

                        </label>
                    </div>
                </td>



                <td>
                    <a href="/sandal/view/{{ $s->kodesandal }}" class="btn btn-success">View</a>
                    |
                    <a href="/sandal/edit/{{ $s->kodesandal }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sandal/hapus/{{ $s->kodesandal }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $sandal->links() }}

@endsection
