@extends('layouts.app')

@section('content')

<div class="content is-normal">
        <h1 class="has-text-primary has-text-centered">Patients</h1>
</div>
<div class="custom-margin">

        <a class="button is-link" href="{{ route('patients.create') }}">Add Patient</a>
<style>
    .custom-margin {
        margin-left: 5px;
    }
</style>

        @if (count($patients) > 0)
            <table class="table is-striped table is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $patients = $patients->reverse();
                    @endphp
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->dob }}</td>
                            <td>{{ $patient->gender }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>
                                <a class="button is-link is-rounded is-small" href="{{ route('patients.show', $patient->id) }}">View</a>
                                <a class="button is-primary is-rounded is-small" href="{{ route('patients.edit', $patient->id) }}">Edit</a>
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger is-rounded is-small" type="submit" onclick="return confirm('Are you sure you want to delete this patient?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No patients found.</p>
        @endif
    </div>
@endsection
