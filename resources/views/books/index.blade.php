
@extends('layouts.template')

@section('content')
@if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('deleted'))
        <div class="alert alert alert-warning">{{ Session::get('deleted') }}</div>
    @endif
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>NO</th>
            <th>title</th>
            <th>author</th>
            <th>year</th>  
            <th class="text-center">Aksi</th>
        </tr>   
    </thead>
    <tbody>
        @php $no =1; @endphp
        @foreach ($books as $item)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$item['title']}}</td>
            <td>{{$item['author']}}</td>
            <td>{{$item['year']}}</td>
            <td class="d-flex justify-content-center">
                <a href="{{ route('Book.edit', $item->id) }}" class="btn btn-primary me-3">Edit</a> 
                <form action="{{ route('Book.delete', $item['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection