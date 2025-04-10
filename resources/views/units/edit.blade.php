@extends('base.base')

@section('content')
    <h1>Create Unit</h1>
    <br>
    <form action="{{ route('units.update',$unit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $unit->name }}" class="form-control">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-4">
            <label for="unit_level">Level</label>
            <input type="number" name="unit_level" id="unit_level" value="{{ $unit->unit_level }}" class="form-control">
            @error('unit_level')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-4">
            <label for="is_active">Active</label>
            <input type="checkbox" name="is_active" id="is_active" value="true" {{ $unit->is_active ? 'checked' : '' }} class="form-control">
            @error('is_active')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-4">
            <button type="submit" class="btn btn-blue">Save</button>
        </div>
    </form>
@endsection
