<div class="reveal small" id="add-task-modal" data-reveal data-options="showDelay:400; hideDelay:100">
    <h1 class="reveal-header">Add a Task</h1>
    <div class="form-container">
        {!! Form::open() !!}

        {{-- Task Name--}}
        {!! Form::label('name', 'Task Name:', ['class'=>'custom-labels']) !!}
        {!! Form::text('name') !!}

        {{-- Task Assignment --}}
        {!! Form::label('assignees', 'Task Assignees:', ['class'=>'custom-labels']) !!}
        <div style="margin-bottom: 15px;">
            {!! Form::select('assignees[]', $users, null, ['id' => 'assignees', 'multiple' => true]) !!}
        </div>

        {{-- Task Description --}}
        {!! Form::label('description', 'Task Description:', ['class'=>'custom-labels']) !!}
        {!! Form::textarea('description', null, ['rows'=>'7']) !!}

        {!! Form::submit('Post Task', ['class' => 'button columns small-12']) !!}
        {!! Form::close() !!}
    </div>
</div>