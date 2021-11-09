@extends('layouts.common')


@section('content')


<div class="d-flex justify-content-between">
    <h5 class="display-6">Daftar Buku</h5>
    <a href="{{ route('book.create') }}">
        <button type="button" class="btn btn-sm btn-outline-success p-3 btn-add-cat" 
            data-bs-action="add">
            <svg id="i-plus" xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 32 32" width="24" height="24" fill="none" 
                stroke="currentcolor" stroke-linecap="round" 
                stroke-linejoin="round" stroke-width="2">
                <path d="M16 2 L16 30 M2 16 L30 16" />
            </svg>
            <span class="px-3 align-bottom">Tambah</span> 
        </button>            
    </a>

</div>
<hr/>

<div class="mb-5"></div>

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

        @foreach ($books as $index=>$book)
            <tr>
                <th scope="row">{{ $index += 1 }}</th>
                <td>{{ $book->title }}</td>
                <td scope="col">{{ $book->synopsis }}</td>
                <td scope="col">{{ $book->author->name }}</td>
                <td scope="col">{{ $book->category->name }}</td>
                <td scope="col">{{ $book->publisher->name }}</td>
                <td scope="col">{{ $book->year }}</td>
                <td>
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                        <a type="button" class="btn btn-sm btn-outline-warning mx-2" href="{{ route('book.edit', $book->id) }}">
                            <svg id="i-edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M30 7 L25 2 5 22 3 29 10 27 Z M21 6 L26 11 Z M5 22 L10 27 Z" />
                            </svg>
                        </a> 
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger mx-auto">
                            <svg id="i-trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M28 6 L6 6 8 30 24 30 26 6 4 6 M16 12 L16 24 M21 12 L20 24 M11 12 L12 24 M12 6 L13 2 19 2 20 6" />
                            </svg>       
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


