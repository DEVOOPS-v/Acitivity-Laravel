@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Employee List</h1>

    @if($employees->isEmpty())
        <p class="text-gray-500 text-center mt-4">No employees found.</p>
    @else
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Email</th>
                <th class="p-2 border">Department</th>
                <th class="p-2 border">Position</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $emp)
            <tr class="hover:bg-gray-50">
                <td class="p-2 border">{{ $emp->first_name }} {{ $emp->last_name }}</td>
                <td class="p-2 border">{{ $emp->email }}</td>
                <td class="p-2 border">{{ optional($emp->department)->name ?? 'N/A' }}</td>
                <td class="p-2 border">{{ optional($emp->position)->title ?? 'N/A' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
