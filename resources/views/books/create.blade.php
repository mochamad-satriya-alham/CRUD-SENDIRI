@extends('layouts.template')

@section('content')

    <form action="{{ route('Book.store') }}" method="POST" class="card p-5">
        @csrf

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    <div class="mb-3 row">
        <label for="title" class="col-sm-2 col-form-label">Judul:</label>
        <div>
            <input type="text" name="title" id="title" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="author" class="col-sm-2 col-form-label">Penulis:</label>
        <div>
            <input type="text" name="author" id="author" required>
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="publisher" class="col-sm-2 col-form-label">Penerbit:</label>
        <div>
            <input type="text" name="publisher" id="publisher" required>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="year" class="col-sm-2 col-form-label">Tahun Terbit:</label>
        <div>
            <input type="number" name="year" id="year" required>
        </div>
    </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
@endsection
