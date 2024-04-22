@extends('layouts.app')
  
@section('title', '')
  
@section('contents')
    <h1 class="mb-0">Detail du Journal</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" placeholder="date" value="{{ $test->date }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="titre" value="{{ $test->titre}}" readonly>
        </div>
    </div>

    <div class="row">

        <div class="col mb-3">
        <label for="exampleFormControlTextarea1">Contenu</label>
        <textarea class="form-control" name="contenu"  placeholder="contenu" readonly style="width: 100%; height: 300px;">{{ $test->contenu }}</textarea>
        </div>
    </div>
    
        
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $test->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control"  placeholder="Updated At" value="{{ $test->updated_at }}" readonly>
        </div>
    </div>

    
@endsection