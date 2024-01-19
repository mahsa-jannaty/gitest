<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resume') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1>Resumes</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($resumes as $resume)
                <tr>
                    <td>{{ $resume->name }}</td>
                    <td>{{ $resume->email }}</td>
                    <td>
                        <!-- Add links for editing and deleting if needed -->
                        {{-- <a href="{{ route('resumes.edit', $resume->id) }}" class="btn btn-primary">Edit</a> --}}
                        {{-- <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No resumes found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
