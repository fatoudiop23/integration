@extends('layouts.app')
  
@section('title', '')
  
@section('contents')

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des journals</h1>
        <a href="{{route('test.create')}}" class="btn btn-primary">Ajouter un journal</a>
    </div>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="col-md-6">
        <div class="form-group">
            <form action="/search" method="get">
                <div class="input-group">
                    <input class="form-control" name="search" placeholder="search" value="{{ isset($search) ? $search :''}}">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="table-success">
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Titre</th>
                <th>Contenu</th>
                







                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($test->count() > 0)
                @foreach($test as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->date }}</td>
                        <td class="align-middle">{{ $rs->titre}}</td>
                        <td class="align-middle">{{ Illuminate\Support\Str::limit($rs->contenu, 100) }}</td>
                   



                        <td class="align-middle">
                            <div class="" role="" aria-label="Basic example">
                                <a href="{{ route('test.show', $rs->id)}}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('test.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('test.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Voulez vous supprimer?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5"></td>
                </tr>
            @endif
        </tbody>
        
    </table>
@endsection