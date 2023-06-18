@extends('layouts.app')

@section('content')
    <div class="content is-normal">
        <h1 class="has-text-primary has-text-centered">Add Patient</h1>
        <div class="columns is-centered">
            <div class="column is-half">
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" required>
            </div>

            
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>

            <button type="submit" class="button is-link">Add</button>
            <a class="button is-link" href="{{ route('patients.index') }}">Cancel</a>
        </form>
    </div>
        @endsection