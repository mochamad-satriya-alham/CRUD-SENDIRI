
@extends ('layouts.template')

@section('content')
    <form action="{{ route('Book.update', $books['id']) }}" method="POST" class="card p-5">
        @csrf
        @method('PATCH')

        @if ($errors->any())
            <ul class="alert alert-danger p-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="mb-3 row">
            <label for="title" class="col-sm-2 col-form-label">Judul:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ $books['title'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="author" class="col-sm-2 col-form-label">Penulis : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="author" name="author" value="{{ $books['author'] }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="author" class="col-sm-2 col-form-label">Penerbit : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $books['publisher'] }}">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="year" class="col-sm-2 col-form-label">Tahun terbit: </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="year" name="year" value="{{ $books['year'] }}">
            </div>
        </div>


        <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
    </form>
@endsection
