@extends('template')

@section('content')

    <form method='post' action='/store_album'>
        @csrf

        <input name="titre" required>nom de l'album</input>
        <button type='submit'></button>

    </form>


@endsection