@extends('master2')
@section('konten')
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />

    <form action="/nilaikuliah/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-10">
                <input required="required" name="NRP" type = "text" class = "form-control" id = "NRP"
                    placeholder = "Masukan NRP ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-10">
                <input required="required" name="NilaiAngka" type = "number" class = "form-control" id = "NilaiAngka"
                    placeholder = "Masukan Nilai Angka ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-10">
                <input required="required" name="SKS" type = "number" class = "form-control" id = "SKS"
                    placeholder = "Masukan SKS ..">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
