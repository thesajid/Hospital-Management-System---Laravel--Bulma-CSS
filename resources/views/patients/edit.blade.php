@extends('layouts.app')

@section('content')
    <div class="content is-normal">
        <h1 class="has-text-primary has-text-centered">Edit Patient</h1>
        
        <div class="columns is-centered">
            <div class="column is-half">
        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" value="{{ $patient->name }}" class="w-full border border-gray-300 p-2">
            </div>

            <div class="mb-4">
                <label for="dob" class="block text-gray-700 font-bold mb-2">Date of Birth:</label>
                <input type="date" name="dob" id="dob" value="{{ $patient->dob }}" class="w-full border border-gray-300 p-2">
            </div>

            <div class="mb-4">
                <label for="gender" class="block text-gray-700 font-bold mb-2">Gender:</label>
                <select name="gender" id="gender" class="w-full border border-gray-300 p-2">
                    <option value="male" {{ $patient->gender === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ $patient->gender === 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
                <input type="text" name="phone" id="phone" value="{{ $patient->phone }}" class="w-full border border-gray-300 p-2">
            </div>

            <button type="submit" class="button is-link">Update</button>
            <a class="button is-link" href="{{ route('patients.index') }}">Cancel</a>
        </form>
    </div>
</div>
</div>
@endsection
