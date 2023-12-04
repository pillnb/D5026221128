@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "firstname" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
                <input name="nama" type = "text" class = "form-control" id = "nama"
                    placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
                <input name="jabatan" type = "text" class = "form-control" id = "jabatan"
                    placeholder = "Masukkan Jabatan Pegawai">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
                <input name="umur" type = "number" class = "form-control" id = "umur"
                    placeholder = "Masukkan Umur Pegawai">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
                <textarea name="alamat" class = "form-control" id = "jabatan" placeholder = "Masukkan Alamat Pegawai"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
