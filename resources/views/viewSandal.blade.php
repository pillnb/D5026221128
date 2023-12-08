@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Sandal</h3>

    <a href="/sandal">Kembali</a>

    <br />
    <br />
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="card" style="width:200px">
                <img src="{{ asset('img/emma.jpg') }}">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-8">
            @foreach ($sandal as $s)
                <fieldset disabled>
                    <form action="/sandal/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $s->kodesandal }}">
                        <div class = "form-group row">
                            <label for = "kode" class = "col-sm-2 control-label">Kode Sandal</label>
                            <div class = "col-sm-10">
                                <textarea required="required" name="kode" class="form-control">{{ $s->kodesandal }}</textarea>
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
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/sandal" class="btn btn-primary w-25 p-2">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
