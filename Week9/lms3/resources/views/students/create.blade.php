@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Add a Student Profile</h1>
    </div>
</div>

<div class="row">
    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname') }}">
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="{{ old('lname') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="text-danger d-block mt-1">{{ $message }}</span>
            @enderror
        </div>
        <br><br>
                @foreach ($courses as $course)
                    
                        <input class="form-check-input" type="checkbox" name="courses" value="{{ $course->id }}" id="course_{{ $course->id }}">
                        
                    
                @endforeach
            </div>
            @error('courses')
                <span class="text-danger d-block mt-1">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
