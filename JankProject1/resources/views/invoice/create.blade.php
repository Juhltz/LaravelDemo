@extends('layouts.app')

@section('title', 'Create Invoice')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Create New Invoice</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('invoice.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Net Price:</label>
                    <input type="number" step="0.01" name="priceNet" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gross Price:</label>
                    <input type="number" step="0.01" name="priceGross" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">VAT:</label>
                    <input type="number" step="0.01" name="vat" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">User Clearing:</label>
                    <input type="number" step="0.01" name="userClearing" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Datum</label>
                    <input type="datetime-local" name="clearingDate" class="form-control" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Speichern</button>
                    <a href="{{ route('invoice.index') }}" class="btn btn-secondary">Zurück</a>
                </div>
            </form>
        </div>
    </div>
@endsection
