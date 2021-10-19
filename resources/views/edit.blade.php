@extends('layout.layout')

@section('content')
    <h1 class="mt-8 mb-4 text-center">Modifier une célébrité</h1>

    @if($errors->any)
        @foreach($errors->all() as $error)
            <span style="color: red">{{ $error }}</span><br>
        @endforeach
    @endif

    <form method="POST" action="{{route('update')}}" class="form-group col-6" style="margin-left: auto; margin-right:
     auto">
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $celebrity->id }}">
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname" class="form-control mb-4" value="{{ $celebrity->firstname }}">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" id="lastname" class="form-control mb-4" value="{{ $celebrity->lastname }}">
        <label for="image">Illustration (url)</label>
        <input type="text" name="image" id="image" class="form-control mb-4" value="{{ $celebrity->image }}">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control mb-4">{{ $celebrity->description }}</textarea>
        <button class="btn btn-success" type="submit">Valider</button>
    </form>

@endsection

