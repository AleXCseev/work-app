<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker</title>
</head>
<body>
    <div class="">
        <div>
            {{ $worker->name }} <br>
            {{ $worker->surname }} <br>
            {{ $worker->age }} <br>
            {{ $worker->email }}
            <div>
                <a href="{{ route('worker.index') }}">Back</a>
            </div>
        </div>
        <hr>
    </div>
</body>
</html>