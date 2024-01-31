@extends('layout.main')

@section('content')


    <form action="{{ route('workers.store') }}" method="POST" style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px;">
        @csrf
        <input type="text" placeholder="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" placeholder="surname" name="surname" value="{{ old('surname') }}">
        @error('surname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" placeholder="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="number" placeholder="age" name="age" value="{{ old('age') }}">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <textarea name="description" placeholder="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label> Is married
            <input type="checkbox" name="is_married"
                {{ old('is_married') ? 'checked' : ''}}
            >
        </label>
        <input type="submit" value="Add">
    </form>

@endsection




