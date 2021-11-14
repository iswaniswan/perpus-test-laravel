@extends('layouts.common')


@section('content')


<div class="d-flex justify-content-between">
    <h5 class="display-6">Daftar Buku</h5>
    <a href="{{ route('book.create') }}" class="mt-auto">
        <button type="button" class="btn btn-sm btn-outline-success px-3 py-1">
            <i class="bi bi-plus-lg"></i> Tambah
        </button>          
    </a>

</div>
<hr/>

<div class="mb-5"></div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <span>{{ $message }}</span>
    </div>
@endif

<table class="table table-hover" id="table_book">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Penulis</th>
            <th scope="col">Kategori</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($books as $book)
            <tr>
                <th scope="col">{{ $loop->iteration }}</th>
                <td scope="col">{{ $book->title }}</td>
                <td scope="col">{{ Str::limit($book->synopsis, 50) }}</td>
                <td scope="col">{{ $book->author->name ?? '' }}</td>
                <td scope="col">{{ $book->category->name ?? '' }}</td>
                <td scope="col">{{ $book->publisher->name ?? '' }}</td>
                <td scope="col">{{ $book->year }}</td>
                <td>
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="d-inline">
                        <a type="button" class="badge bg-warning" href="{{ route('book.edit', $book->id) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a> 
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="badge bg-danger border-0">
                            <i class="bi bi-x-circle"></i>   
                        </button>   
                    </form>
                </td>
            </tr>
        @endforeach
            
    </tbody>
</table>


<script>

$(document).ready(function() {
    $('#table_book').DataTable();
})

</script>

@endsection


