<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit workers</title>
</head>
<body>
    <form action="{{ route('worker.update', $worker->id) }}" method="POST" style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px;">
        @csrf
        @method('PATCH')
        <input type="text" placeholder="name" name="name" value="{{ $worker->name }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" placeholder="surname" name="surname" value="{{ $worker->surname }}">
        @error('surname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="text" placeholder="email" name="email" value="{{ $worker->email }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="number" placeholder="age" name="age" value="{{ $worker->age }}">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <textarea name="description" placeholder="description">{{ $worker->description }}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label> Is married
            <input type="checkbox" name="is_married"
                {{ $worker->is_married ? 'checked' : ''}}
            >
        </label>
        <input type="submit" value="Add">
    </form>
</body>
</html>


