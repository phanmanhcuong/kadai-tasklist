@extends ('layouts/app')
@section ('content')
    <h1>id = {{ $task->id }} タスクの詳細ページ</h1>
    
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6"> 
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <td> {{ $task->id }} </td>
            </tr>
            
            <tr>
                <th>状態</th>
                <td> {{ $task->status }} </td>
            </tr>
            
            <tr>
                <th>タスク</th>
                <td> {{ $task->content }} </td>
            </tr>
        </table>
        
        {!! link_to_route('tasks.edit', ' このタスク編集', ['id' => $task->id], ['class' => 'btn btn-default glyphicon glyphicon-pencil']) !!}
    
        {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}  
        
            {!! Form::button('<i class="glyphicon glyphicon-trash"> 削除</i>', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
        {!! Form::close() !!}
    </div>
    
    
@endsection