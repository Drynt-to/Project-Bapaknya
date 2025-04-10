@extends('base.base')

@section('content')
    <h1>Create Unit</h1>
    <br>
    <form action="{{ route('units.store') }}" method="POST">
        @csrf
        <div class="my-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-4">
            <label for="unit_level">Level</label>
            <input type="number" name="unit_level" id="unit_level" class="form-control">
            @error('unit_level')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-4">
            <label for="is_active">Active</label>
            <input type="checkbox" name="is_active" id="is_active" value="true" class="form-control">
            @error('is_active')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-blue">Create</button>
        </div>
    </form>
@endsection
