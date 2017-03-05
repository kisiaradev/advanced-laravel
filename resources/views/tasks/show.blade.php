@extends('layouts.main')

@section('title', 'Task')

@section('content')
<div id="single-task-container" class="row">
    <div class="small-12 columns">
        <h1>
            {{ $task->name }}
            <p>
                <small>Created On: {{ $task->created_at }}</small>
            </p>
        </h1>

        <h2>Description</h2>
        <p>
            {{ $task->description }}
        </p>

        <h2>Created By</h2>
        <p>
            {{ $task->creator->name }}
        </p>

        <h2>Assigned To</h2>

        @foreach($task->users as $user)
            <p>
                {{ $user->name }}
            </p>
        @endforeach
    </div>
</div>
@endsection

@section('modals')
    @include('tasks.shared.add_task_modal')
@endsection

@section('scripts')
    <script>
        $( document ).ready(function(){
            $('#assignees').select2();
        })
    </script>
@endsection