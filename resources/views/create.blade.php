@extends('layouts.sidebar')

@section('content')
<div class="p-5">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add a New Student</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Oops! Something went wrong.</strong>
                <ul class="mt-3 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="full_name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                <input 
                    type="text" 
                    name="full_name" 
                    id="full_name" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="e.g., John Smith"
                    value="{{ old('full_name') }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="e.g., john.smith@university.edu"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="department" class="block text-gray-700 font-medium mb-2">Department</label>
                <input 
                    type="text" 
                    name="department" 
                    id="department" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="e.g., Computer Science"
                    value="{{ old('department') }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label for="enrollment_year" class="block text-gray-700 font-medium mb-2">Enrollment Year</label>
                <input 
                    type="number" 
                    name="enrollment_year" 
                    id="enrollment_year" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    placeholder="e.g., 2023"
                    min="1900"
                    max="{{ date('Y') + 1 }}"
                    value="{{ old('enrollment_year') }}"
                    required
                >
            </div>

            <div class="flex justify-end mt-6">
                <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold px-4 py-2 rounded mr-2">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-4 py-2 rounded">
                    Save Student
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
