@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Creer un journal</h1>
    <hr />
    <form action="{{route('test.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
            Date<input type="date" name="date" class="form-control" placeholder="Veuillez entrer la date" required>
            </div>
            <div class="col">
             Titre <input type="text" name="titre" class="form-control" placeholder="Veuillez entrer le titre" required>
            </div>
        </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu</label>
    <textarea class="form-control" id="contenu" rows="6" name="contenu"></textarea>
  </div>
           
  
      <div class="" >
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>
    </form>
@endsection