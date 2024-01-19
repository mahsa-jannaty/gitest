<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Resume') }}
        </h2>
    </x-slot>
    <div class="container">
        <h1>Create Resume</h1>

        <form action="{{ route('resumes.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="summary">Summary</label>
                <textarea name="summary" id="summary" class="form-control" rows="5" required>{{ old('summary') }}</textarea>
            </div>

            <div class="form-group">
                <label for="experience">Experience</label>
                <textarea name="experience" id="experience" class="form-control" rows="5" required>{{ old('experience') }}</textarea>
            </div>

            <div class="form-group">
                <label for="education">Education</label>
                <textarea name="education" id="education" class="form-control" rows="5" required>{{ old('education') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create Resume</button>
        </form>
    </div>
</x-app-layout>
