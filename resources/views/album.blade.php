@extends('template')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/album.css') }}">
@endpush

@section('content')


<div class="controls container">
    <div class="search">
        <form method="GET" action="/album" style="display:flex; width:100%">
            @csrf
            <input name="search" type="text" placeholder="Rechercher un album par date ou par nom" required />
            <button class="btn" type="submit">Rechercher</button>
        </form>
    </div>
    <div>
        <a href="/create_album" class="btn">Nouvel album</a>
    </div>
</div>

<div class="container">
    <div id="albums_container">
        @foreach($albums as $a)
            <a href="{{ route('album.show', $a->id) }}" style="text-decoration:none;">
                <div class="album-card card">
                    @if(isset($a->preview) && $a->preview)
                        <img class="thumb" src="{{ $a->preview->url }}" alt="{{ $a->titre }}">
                    @else
                        <div class="thumb" style="display:flex;align-items:center;justify-content:center;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));color:var(--muted);">Aucune photo</div>
                    @endif
                    <div class="album-meta">
                        <div class="title">{{ $a->titre }}</div>
                        @foreach($user as $u)
                            @if($a->user_id == $u->id)
                            <div class="info">Créé le {{ $a->creation }} · Propriété: {{ $u->name }}</div>
                            @endif    
                        @endforeach    
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

@endsection