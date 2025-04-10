@extends('base.base')

@section('content')
    <h1>Create Unit</h1>
    <br>
    <div class="my-4">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $unit->name }}" disabled class="form-control">
    </div>
    <div class="my-4">
        <label for="unit_level">Level</label>
        <input type="number" name="unit_level" id="unit_level" value="{{ $unit->unit_level }}" disabled class="form-control">
    </div>
    <div class="my-4">
        <label for="is_active">Active</label>
        <input type="checkbox" name="is_active" id="is_active" value="true" disabled {{ $unit->is_active ? 'checked' : '' }} class="form-control">
    </div>
@endsection
