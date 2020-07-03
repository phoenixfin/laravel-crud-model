@extends('adminlte.master')

@section('content')
    <h1>Buat Pertanyaan Baru</h1>
    <div class="ml-4">
        <form action="/question" method="POST">
            @csrf
            <!-- <div class="form-group">
                <label for="username">Nama User</label><br>
                <input type="text" name="username">
            </div> -->

            <div class="form-group">
                <label for="title">Judul Pertanyaan</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="content">Isi pertanyaan</label>
                <textarea id="content" class="form-control" name="content" id="content" rows="10">
                </textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Kirim">
            </div>
        </form>
    </div>
@endsection