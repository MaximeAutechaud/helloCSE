@extends('layout.layout')

@section('content')
    <h1>Ajouter une célébrité</h1>

    @if($errors->any)
        @foreach($errors->all() as $error)
            <span>{{ $error }}</span><br>
        @endforeach
    @endif

    <form method="POST" action="{{route('store')}}" class="form-group col-6">
        @csrf
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" class="form-control">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname" class="form-control">
        <label for="image">Illustration (url)</label>
        <input type="text" name="image" id="image" class="form-control">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"></textarea>
        <button type="submit">Valider</button>
    </form>

@endsection

