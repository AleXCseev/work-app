<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Index page
    <div>
        <a href="{{ route('worker.create') }}">Create</a>
    </div>
    <hr>
    <div class="">
        @foreach($workers as $worker)
        <div>
            {{ $worker->name }} <br>
            {{ $worker->surname }} <br>
            {{ $worker->age }} <br>
            {{ $worker->email }}
            <div>
                <a href="{{ route('worker.show', $worker->id) }}">Show</a>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</body>
</html>