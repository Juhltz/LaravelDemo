@extends('layouts.app')

@section('title','Page Title')

@section('sidebar')
    @parent
    <p>this is append to the master sidebar.</p>
@endsection

@section('content')
    <h1>Invoice</h1>
    <table id="table_data">
        <tr>
            <td>ID</td>
            <td>Name</td>
        </tr>

        @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td><a href="{{ route('invoice.show', $d->id) }}">Show Details</a></td>
            </tr>
        @endforeach
    </table>

@endsection
