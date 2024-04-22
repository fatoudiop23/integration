@extends('layouts.app')
 
@section('title', 'Mon profil')
 
@section('contents')
<hr />
<form method="POST" enctype="multipart/form-data" action="">
    <div>
        <label class="label">
            <span class="text-base label-text">Name</span>
        </label>
        <input name="name" type="text" value="{{ auth()->user()->name }}" class="w-full input input-bordered" readonly />
    </div><br>
    <div>
        <label class="label">
            <span class="text-base label-text">Email</span>
        </label>
        <input name="email" type="text" value="{{ auth()->user()->email }}" class="w-full input input-bordered" readonly/>
    </div>
    
</form>
@endsection