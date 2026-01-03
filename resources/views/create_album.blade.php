@extends('template')

@section('content')

<div class="container">

    <form method='post' action='/store_album'>
        @csrf

        <input name="titre" placeholder="Nom de l'album" required>
        <button type='submit'>Créer</button>

    </form>

</div>

@endsection