@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Data Sandal</h3>

    <a href="/sandal"> Kembali</a>

    <br />
    <br />

    @foreach ($sandal as $s)
        <form action="/sandal/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $s->kodesandal }}">
            <div class = "form-group row">
                <label for = "kode" class = "col-sm-2 control-label">Kode Sandal</label>
                <div class = "col-sm-10">
                    <input type="text" required="required" name="kode" value="{{ $s->kodesandal }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "merk" class = "col-sm-2 control-label">Merk Sandal</label>
                <div class = "col-sm-10">
                    <input type="text" required="required" name="merk" value="{{ $s->merksandal }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "stock" class = "col-sm-2 control-label">Stock Sandal</label>
                <div class = "col-sm-10">
                    <input type="number" required="required" name="stock" value="{{ $s->stocksandal }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
                <div class = "col-sm-10">
                    <input type="text" required="required" name="tersedia" value="{{ $s->tersedia }}"
                        class="form-control">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
