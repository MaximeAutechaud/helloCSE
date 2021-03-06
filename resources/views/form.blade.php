@extends('layout.layout')

@section('content')
    <h1 class="mt-8 mb-4 text-center">Ajouter une célébrité</h1>

    @if($errors->any)
        @foreach($errors->all() as $error)
            <span style="color: red">{{ $error }}</span><br>
        @endforeach
    @endif

    <form method="POST" action="{{route('store')}}" class="form-group col-6" style="margin-left: auto; margin-right:auto">
        @csrf
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" class="form-control mb-4">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname" class="form-control mb-4">
        <label for="image">Illustration (url)</label>
        <input type="text" name="image" id="image" class="form-control mb-4">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control mb-4"></textarea>
        <button class="btn btn-success" type="submit">Valider</button>
    </form>

@endsection

