@extends('layouts.app')

@section('title', 'Willkommen bei der Elch Buchhaltung')

@section('content')
    <div class="container mt-5 text-center">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h2 class="mb-0">Willkommen bei der Buchhaltung, Gustav für sich um Sie kümmern! 🦌</h2>
            </div>
            <div class="card-body">
                <p class="lead">Hier kannst du Rechnungen erstellen, verwalten und – falls kein Elch drüberstolpert – auch wiederfinden!</p>

                <p>Elche sind bekannt für zwei Dinge: majestätische Geweihe und eine atemberaubende Fähigkeit, Zäune und Buchhaltungen zu zerstören.
                    Falls also plötzlich Rechnungen fehlen, war’s bestimmt nicht unser Fehler... sondern Gustav, der Buchhaltungs-Elch. 😬📉</p>

                <a href="{{ route('invoice.index') }}" class="btn btn-primary mt-3">
                    Schau mal, ob Gustav die Rechnungen verschont hat!
                </a>
            </div>
        </div>
    </div>
@endsection
