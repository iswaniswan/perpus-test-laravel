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
        <form id="form_publisher" action="{{ route('publisher.update', $publisher->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="modal-header bg-light">
                <h5 class="modal-title" id="modal_title">Edit Penerbit</h5>
                <a href="{{ route('publisher.index') }}">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </a>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $publisher->name }}" required>
                </div>    
                <div class="mb-3">
                    <label for="slug" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $publisher->slug }}" required>
                </div>                  
            </div>

            <div class="modal-footer d-flex justify-content-between"> 
                <a href="{{ route('publisher.index') }}">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                </a>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>                
            </div>

        </form> 
    </div>
</div>


@endsection