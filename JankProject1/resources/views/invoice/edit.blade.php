@extends('layouts.app')

@section('title', 'Edit Invoice')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0">Gustav zum Arbeiten bringen</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('invoice.update', $invoice) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $invoice->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Net Price:</label>
                        <input type="number" class="form-control" step="0.01" name="priceNet" value="{{ $invoice->priceNet }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gross Price:</label>
                        <input type="number" class="form-control" step="0.01" name="priceGross" value="{{ $invoice->priceGross }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">VAT:</label>
                        <input type="number" class="form-control" step="0.01" name="vat" value="{{ $invoice->vat }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">User Clearing:</label>
                        <input type="number" class="form-control" step="0.01" name="userClearing" value="{{ $invoice->userClearing }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Clearing Date:</label>
                        <input type="datetime-local" class="form-control" name="clearingDate" value="{{ $invoice->clearingDate }}" required>
                    </div>

                    <button type="submit" class="btn btn-success">Gustav muss wieder arbeiten :(</button>
                </form>

                <!-- Delete Button -->
                <form action="{{ route('invoice.destroy', $invoice) }}" method="POST" onsubmit="return confirm('Willst du die Rechnung sicher Gustav geben?');" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Gustav wird sich freuen, er hat eh schon Hunger</button>
                </form>

                <a href="{{ route('invoice.index') }}" class="btn btn-secondary mt-3">Gustav muss nichts arbeiten</a>
            </div>
        </div>
    </div>
@endsection
