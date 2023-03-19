@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-titele">ToDo List</h1>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="form-group">
                                <input class="form-control" name="titel" type="text" placeholder="Enter Task">
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titel</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($task as $key => $task)
                                <tr>
                                    <th scope="row">{{ $key++ }}</th>
                                    <td>{{ $task->titel }}</td>
                                    <td>

                                        @if ($task->done == 0)
                                            <span class="badeg bg-warning">Not Completed</span>
                                        @else
                                            <span class="badeg bg-success">Completed</span>
                                        @endif

                                    </td>
                                    <td>

                                        <a href="{{ route('todo.delete',$task->id) }}" class="btn btn-danger"><i class="fa-regular fa-trash"></i></a>
                                        <a href="{{ route('todo.done',$task->id) }}" class="btn btn-success"><i class="fa-light fa-check"></i>

                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-titele {
            padding-top: 15vh;
            font-size: 3rem;
            color: #89eebc;
            text-align: center;
        }
    </style>
@endpush
