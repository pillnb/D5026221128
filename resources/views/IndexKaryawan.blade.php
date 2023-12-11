@extends('master2')
@section('title', 'Database karyawan')

@section('judul_halaman')

    <h2>www.malasngoding.com</h2>
    <h3>Data Karyawan</h3>

    <a href="/karyawan/tambahKaryawan"> + Tambah karyawan Baru</a>

    <br />
    <br />
@endsection

@section('konten')

    <p>Cari Data karyawan :</p>
    <form action="/karyawan/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari karyawan berdasarkan merk .."
            value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>


    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
        <tr style="text-align: center">
            <td
            >{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @if($errors->has('kodepegawai') && $errors->first('kodepegawai') == $k->kodepegawai)
        <script>
            alert("{{ $errors->first('kodepegawai') }}");
        </script>
    @endif

    @endforeach

    </table>
@endsection
