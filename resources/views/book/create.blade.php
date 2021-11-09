@extends('layouts.common')

@section('content')


<div class="row mb-5">
    <div class="col-12">   
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Periksa lagi data yang diinput.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 

        <form id="form_book" action="{{ route('book.store') }}" method="POST">
            @csrf

            <div class="modal-header bg-light">
                <h5 class="modal-title" id="modal_title">Tambah Buku</h5>
                <a href="{{ route('book.index') }}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </a>
            </div>

            <div class="modal-body">                
                <input type="hidden" class="form-control" name="action" id="book_action" value="add">
                <input type="hidden" class="form-control" name="id" id="book_id" value="">

                <div class="mb-3">
                    <label for="book_title" class="form-label">Judul</label>
                    <input type="text" class="form-control" name="title" id="book_title" value="">
                </div>

                <div class="mb-3">
                    <label for="book_synopsis" class="form-label">Sinopsis</label>
                    <input type="text" class="form-control" name="synopsis" id="book_synopsis" value="">
                </div>

                <div class="mb-3">
                    <label for="book_author" class="form-label">Penulis</label>
                    <select class="form-select" name="author_id" id="book_author" value="">
                        <option value="0">-</option>
                        @foreach ($authors as $index=>$author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach                       
                    </select>
                </div>

                <div class="mb-3">
                    <label for="book_category" class="form-label">Kategori</label>
                    <select class="form-select" name="category_id" id="book_category" value="">
                        <option value="0">-</option>
                        @foreach ($categories as $index=>$category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="book_publisher" class="form-label">Penerbit</label>
                    <select class="form-select" name="publisher_id" id="book_publisher" value="">
                        <option value="0">-</option>
                        @foreach ($publishers as $index=>$publisher)
                            <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="book_year" class="form-label">Tahun</label>
                    <input type="number" class="form-control" name="year" id="book_release_year" value="">
                </div>
            </div>
            
            <div class="modal-footer d-flex justify-content-between">           
                <a href="{{ route('book.index') }}">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                </a>     
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>

        </form> 
        
    </div>
</div>


@endsection