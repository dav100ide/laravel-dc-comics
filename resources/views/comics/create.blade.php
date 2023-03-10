@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Crea un nuovo comic</h1>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>    
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50" >
            </div>
            <div class="mb-3">
               <label for="series" class="form-label">Series*</label>
               <input type="text" class="form-control" id="series" name="series" maxlength="50" >
           </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo*</label>
                <select class="form-select" id="type" name="type">
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" max="500" required>
            </div>
            <div class="mb-3">
               <label for="sale_date" class="form-label">sale date*</label>
               <input type="date" class="form-control" id="sale_date" name="sale_date" required>
           </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb"  required>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection