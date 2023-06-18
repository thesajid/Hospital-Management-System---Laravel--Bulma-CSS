@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Patient Details</h1>

        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $patient->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $patient->name }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $patient->dob }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $patient->gender }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ $patient->phone }}</td>
            </tr>
        </table>

        <a class="btn btn-secondary" href="{{ route('patients.index') }}">Back</a>
    </div>
@endsection
