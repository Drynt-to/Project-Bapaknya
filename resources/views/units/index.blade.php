@extends('base.base')

@section('content')
    <h1>Units</h1>
    <br>
    <div class="my-4">
        <a href="{{ route('units.create') }}" class="btn btn-blue">Create</a>
    </div>
    <br>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Level</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($units as $unit)
        <tr>
            <td>{{ $unit->name }}</td>
            <td>{{ $unit->level }}</td>
            <td>{{ $unit->is_active=='1' ? 'Active' : '' }}</td>
            <td>
                <a href="{{ route('units.show', $unit->id) }}" class="btn btn-blue">Show</a>
                <a href="{{ route('units.edit', $unit->id) }}" class="btn btn-yellow">Edit</a>
                <form action="{{ route('units.destroy', $unit->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-red">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
