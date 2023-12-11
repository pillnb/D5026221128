@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class = "form-group row">
            <label for = "kodepegawai" class = "col-sm-2 control-label">Kode Pegawai</label>
            <div class = "col-sm-10">
                <input name="kodepegawai" type = "text" class = "form-control" id = "kodepegawai"
                    placeholder = "Masukkan Kode Pegawai">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "namalengkap" class = "col-sm-2 control-label">Nama Lengkap</label>
            <div class = "col-sm-10">
                <input name="namalengkap" type = "text" class = "form-control" id = "namalengkap"
                    placeholder = "Masukkan Nama Lengkap karyawan">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
            <div class = "col-sm-10">
                <input name="divisi" type = "text" class = "form-control" id = "divisi"
                    placeholder = "Masukkan Divisi karyawan">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "departemen" class = "col-sm-2 control-label">departemen</label>
            <div class = "col-sm-10">
                <input name="departemen" type = "text" class = "form-control" id = "departemen"
                    placeholder = "Masukkan Departemen karyawan">
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary">
    </form>
@endsection
