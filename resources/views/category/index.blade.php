@extends('layouts.common')

@section('content')

<div class="d-flex justify-content-between">
    <h5 class="display-6">Daftar Kategori</h5>
    <a href="{{ route('category.create') }}" class="mt-auto">
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

<table class="table table-hover" id="table_category">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="col">{{ $loop->iteration }}</th>
                <td scope="col">{{ $category->name }}</td>
                <td>                    
                    <a href="{{ route('category.edit', $category->id) }}" class="badge bg-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a> 
                    
                    <form action="{{ route('category.destroy', $category->id) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')                        
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')">
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

    $('#table_category').DataTable();

})

</script>

@endsection


