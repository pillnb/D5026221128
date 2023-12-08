@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Sandal</h3>

    <a href="/sandal"> Kembali</a>

    <br />
    <br />

    <form action="/sandal/store" method="post">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk Sandal</label>
            <div class = "col-sm-10">
                <input name="merk" type = "text" class = "form-control" id = "merk"
                    placeholder = "Masukkan Merk Sandal">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "stock" class = "col-sm-2 control-label">Stock</label>
            <div class = "col-sm-10">
                <input name="stock" type = "number" class = "form-control" id = "stock"
                    placeholder = "Masukkan Stock sandal">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-10">
                <input name="tersedia" type = "text" class = "form-control" id = "tersedia"
                    placeholder = "Apakah sandal tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
