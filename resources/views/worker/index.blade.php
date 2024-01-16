<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers</title>
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
            <div>
                <a href="{{ route('worker.edit', $worker->id) }}">Edit</a>
            </div>
            <form action="{{ route('worker.delete', $worker->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>
        <hr>
        @endforeach
        <div class="my-nav">
            {{ $workers->links() }}
        </div>
    </div>

<style>
    .my-nav {
        display: flex;
        justify-content: center;
    }
    .my-nav svg {
        width: 20px;
        height: 20px;
    }
</style>
</body>
</html>