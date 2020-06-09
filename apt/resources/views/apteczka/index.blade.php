//wybor apteczki, tworzenie nowej apteczki
@extends('layouts/master')
@section('title','Wybierz/Stwórz apteczkę')
@section('content')

<div class="row">
    <div class="col-6">
        <p>Wybierz apteczkę </p>
        <form method="post" class="mt-1" action="{{ route('wybierzapteczke')}}">
            <div class="form-group">
                <select name="wyborApteczki" class="custom-select ml-3 mr-3" id="wyborApteczki">
                        <option selected value="{{ old('wyborApteczki')}}">Wybierz apteczkę</option>
                </select>
            </div>
            <a href="{{route('wybierzapteczke')}}"><button class="btn btn-primary form-control ml-3 mb-2">Potwierdź wybór</button></a>
            {{ csrf_field() }}
        </form>
    </div>
    <div class="col-6">
        <p>Stwórz nową apteczkę</p>
        <button type="button" class=" form-control btn btn-warning">Stwórz</button>
    </div>
</div>
@endsection