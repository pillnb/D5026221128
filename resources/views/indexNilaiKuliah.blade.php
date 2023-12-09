@extends('master2')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
    <h2>Data Nilai kuliah</h2>

    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Kuliah Baru</a>
    <br>
@endsection

@section('konten')
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $nk)
            <tr>
                <td>{{ $nk ->ID}}</td>
                <td>{{ $nk ->NRP}}</td>
                <td>{{ $nk ->NilaiAngka}}</td>
                <td>{{ $nk ->SKS}}</td>
                <td>
                    @if ($nk->NilaiAngka <= 40)
                        D
                    @elseif ($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                        C
                    @elseif ($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>
                    {{$nk->SKS * $nk->NilaiAngka}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
