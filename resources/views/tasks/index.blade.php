@extends('layouts.main')

@section('title', 'Tasks')

@section('content')
<div id="task-container" class="row">
    <div class="small-12 columns">

        @if(session('task_created'))
            <div class="callout success">
                <p>{{ session('task_created') }}</p>
            </div>
        @endif

        <div class="card radius">
            <div class="row">
                <h3 class="columns small-6">Total Tasks: {{ 0 }}</h3>

                <ul class="menu columns small-6">
                    <li><a href=""><i class="fa fa-trash"></i></a></li>
                    <li><a href="" class="custom-br"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="" class="custom-br"><i class="fa fa-users"></i></a></li>
                    <li><a href="" class="custom-br"><i class="fa fa-edit"></i></a></li>
                </ul>
            </div>

            <div id="table-container" class="row" style="border-spacing: 0">
                <table class="unstriped">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox">
                                Task
                            </th>
                            <th colspan="4">Task Description</th>
                            <th>Creator</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($tasks) > 0)
                            @foreach($tasks as $task)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                        <a href="{{ url('tasks/'.$task->slug) }}" class="task-name">
                                            <strong>{{ $task->name }}</strong>
                                        </a>
                                    </td>
                                    <td colspan="4">{{ $task->description }}</td>
                                    <td>{{ $task->creator->name }}</td>
                                    <td>{{ $task->created_at }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">
                                    <div class="callout secondary text-center">
                                        <h2>No Tasks Found</h2>
                                        <p>There are no tasks associated with you at the moment</p>
                                        <button class="button" data-open="add-task-modal">Create a Task</button>
                                    </div>
                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


