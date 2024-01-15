<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('worker.store') }}" method="POST" style="display: flex; flex-direction: column; align-items: flex-start; gap: 10px;">
        @csrf
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="surname" name="surname">
        <input type="text" placeholder="email" name="email">
        <input type="number" placeholder="age" name="age">
        <textarea name="description" placeholder="description"></textarea>
        <label> Is married
            <input type="checkbox" name="is_married">
        </label>
        <input type="submit" value="Add">
    </form>
</body>
</html>