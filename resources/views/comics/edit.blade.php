@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>MODIFICA {{$comic->title}}</h1>

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50" value="{{ $comic->title}}" required>
            </div>
            <div class="mb-3">
               <label for="series" class="form-label">Series*</label>
               <input type="text" class="form-control" id="series" name="series" maxlength="50" value="{{$comic->series}}" required>
           </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo*</label>
                <select class="form-select" id="type" name="type">
                    <option value="comic book" {{ $comic->type === 'comic book'? 'selected': null }}>comic book</option>
                    <option value="graphic novel" {{ $comic->type === 'graphic novel'? 'selected': null }}>graphic novel</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control" id="price" name="price" max="500" value="{{$comic->price}}" required>
            </div>
            <div class="mb-3">
               <label for="sale_date" class="form-label">sale date*</label>
               <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">
                  {!! $comic->description !!}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb"  value="{{ $comic->thumb }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection