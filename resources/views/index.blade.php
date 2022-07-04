@extends('layouts.master')

@section('body')
    <table class="table table-striped">
        <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            @foreach($devs as $dev)
                <th scope="col">{{ $dev->name }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $key => $task)
            <tr>
                <th scope="row">{{$key}}. Hafta</th>
                @foreach($devs as $dev)
                    <td>
                        @isset($task[$dev->id])
                            @foreach($task[$dev->id] as $devTask)
                                <p>{{ $devTask }}</p>
                            @endforeach
                        @endisset
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
