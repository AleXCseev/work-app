@extends('layout.main')

@section('content')

<div>
    <div>
        <a href="{{ route('workers.create') }}">Create</a>
    </div>
    <hr>
    <div>
        <form action="{{ route('workers.index') }}">
            <input type="text" name="name" placeholder="name" value="{{ request()->get('name') }}">
            <input type="text" name="surname" placeholder="surname" value="{{ request()->get('surname') }}">
            <input type="text" name="email" placeholder="email" value="{{ request()->get('email') }}">
            <input type="number" name="from" placeholder="from" value="{{ request()->get('from') }}">
            <input type="number" name="to" placeholder="to" value="{{ request()->get('to') }}">
            <input type="text" name="description" placeholder="description" value="{{ request()->get('description') }}">
            <label>
                <span>Is married</span>
                <input type="checkbox" name="is_married"
                 {{ request()->get('is_married') == 'on' ? 'checked' : '' }}
                >
            </label>
            
            <input type="submit" value="Search">
            <a href="{{ route('workers.index') }}">Clear</a>
        </form>
    </div>
    <hr>
    <div class="">
        @foreach($workers as $worker)
        <div>
            {{ $worker->name }} <br>
            {{ $worker->surname }} <br>
            {{ $worker->age }} <br>
            {{ $worker->email }} <br>
            {{ $worker->description }} <br>
            {{ $worker->is_married }}

            <div>
                <a href="{{ route('workers.show', $worker->id) }}">Show</a>
            </div>
            <div>
                <a href="{{ route('workers.edit', $worker->id) }}">Edit</a>
            </div>
            <form action="{{ route('workers.destroy', $worker->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>
        <hr>
        @endforeach
        <div class="my-nav">
            {{ $workers->withQueryString()->links() }}
        </div>
    </div>



</div>

@endsection
  