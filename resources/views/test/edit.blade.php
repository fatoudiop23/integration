@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Mettre à jour le journal</h1>
    <hr />
    <form action="{{ route('test.update', $test->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="date" class="form-control" placeholder="Nom" value="{{ $test->date }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" placeholder="titre" value="{{ $test->titre }}" >
            </div>
        </div>
        
        <div class="row">

        <div class="col mb-3">
        <label for="exampleFormControlTextarea1">Contenu</label>
        <textarea class="form-control" name="contenu"  placeholder="contenu"  style="width: 100%; height: 300px;">{{ $test->contenu }}</textarea>
        </div>
    </div>
            
            <div class="" >
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>
            </div>
    </form>
@endsection