@extends('layout.main')

@section('content')

    <div class="">
        <div>
            {{ $worker->name }} <br>
            {{ $worker->surname }} <br>
            {{ $worker->age }} <br>
            {{ $worker->email }}
            <div>
                <a href="{{ route('workers.index') }}">Back</a>
            </div>
        </div>
        <hr>
    </div>

@endsection