@extends('layouts.sidebar')

@section('content')
    <div class="p-5">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif
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
        {{-- Bagian Header dengan Judul dan Tombol Add --}}
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Students List</h2>
            <a href="{{ route('student.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Add A Student
            </a>
        </div>

        <form method="GET" action="{{ route('dashboard') }}" class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-6">
            <input 
                type="text" 
                name="search" 
                class="border rounded-lg p-2 w-full" 
                placeholder="Look For Students..." 
                value="{{ request('search') }}"
            >
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                Search
            </button>
        </form>     

        <div class="overflow-x-auto rounded-lg shadow">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="bg-gray-800 text-white text-left">
                        <th class="p-3">Id</th>
                        <th class="p-3">Full Name</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Department</th>
                        <th class="p-3">Enrollment Year</th>
                        <th class="p-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3">{{ $student->id }}</td>
                            <td class="p-3">{{ $student->full_name }}</td>
                            <td class="p-3">{{ $student->email }}</td>
                            <td class="p-3">{{ $student->department }}</td>
                            <td class="p-3">{{ $student->enrollment_year}}</td>
                            <td class="p-3 flex flex-wrap gap-2 px-0">
                                <a href="{{ route('student.show', $student->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Edit
                                </a>
                                <form id="delete-form-{{ $student->id }}" action="{{ route('student.destroy', $student->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" data-id="{{ $student->id }}" class="delete-btn bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center p-5 text-gray-500">
                                No Students Found
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="flex justify-center mt-6">
            {{ $students->appends(request()->query())->links('pagination::tailwind') }}
        </div>
    </div>

    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100">
                <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <h3 class="text-lg leading-6 font-medium text-gray-900 mt-4">Delete Student</h3>
            <div class="mt-2 px-7 py-3">
                <p class="text-sm text-gray-500">
                    Are you sure you want to delete this student? This action cannot be undone.
                </p>
            </div>
            <div class="items-center px-4 py-3">
                <button id="cancel-btn" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md mr-2 hover:bg-gray-300">
                    Cancel
                </button>
                <button id="confirm-delete-btn" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                    Yes, Delete
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteModal = document.getElementById('deleteModal');
        const cancelBtn = document.getElementById('cancel-btn');
        const confirmDeleteBtn = document.getElementById('confirm-delete-btn');
        let studentIdToDelete = null;

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                studentIdToDelete = this.getAttribute('data-id');
                deleteModal.classList.remove('hidden');
            });
        });

        cancelBtn.addEventListener('click', function () {
            deleteModal.classList.add('hidden');
            studentIdToDelete = null;
        });

        confirmDeleteBtn.addEventListener('click', function () {
            if (studentIdToDelete) {
                const form = document.getElementById('delete-form-' + studentIdToDelete);
                if (form) {
                    form.submit();
                }
            }
        });

        window.addEventListener('click', function (event) {
            if (event.target == deleteModal) {
                deleteModal.classList.add('hidden');
                studentIdToDelete = null;
            }
        });
    });
</script>
@endsection