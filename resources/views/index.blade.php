@extends('layout.layout')

@section('content')
    <div class="accordion mt-8" id="accordionExample" style="width: 75%;margin-left: auto; margin-right: auto">
        @foreach($celebrities as $celebrity)
            <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="{{"#" . $celebrity->firstname . $celebrity->lastname}}" aria-expanded="true"
                        aria-controls="{{"#" . $celebrity->firstname . $celebrity->lastname}}">
                    {{ $celebrity->firstname . ' ' . $celebrity->lastname }}
                </button>
            </h2>
            <div id="{{$celebrity->firstname . $celebrity->lastname}}" class="accordion-collapse collapse"
                 aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
                <img src="{{ $celebrity->image }}" style="width: 10%">
                <div class="accordion-body">
                    {{ $celebrity->description }}
                    <div>
                        <a href="{{ route('edit', ['id' => $celebrity->id]) }}">Editer</a>
                        <a href="{{ route('delete', ['id' => $celebrity->id]) }}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
