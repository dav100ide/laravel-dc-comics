@extends('layouts.main')

@section('page-content')
<div class="container">
   <h1>comics</h1>

   <table class="table">
       <thead>
         <tr>
           <th scope="col">Titolo</th>
           <th scope="col">Tipo</th>
           <th scope="col">copertina</th>
           <th scope="col">prezzo</th>
           <th scope="col">Azioni</th>
         </tr>
       </thead>
       <tbody>
           @foreach ($comics as $comic)
           <tr>
               <td>{{ $comic->title }}</td>
               <td>{{ $comic->type }}</td>
               <td>
                  <img src="{{$comic->thumb}}" class="img-fluid">   
               </td>
               <td>{{ $comic->price }}</td>
               <td>
                  <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vedi</a>
                  <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
              </td>
           </tr>
           @endforeach
       </tbody>
     </table>

     <a href="{{ route('comics.create') }}" class="btn btn-success">Crea un nuovo comic</a>
</div>
@endsection