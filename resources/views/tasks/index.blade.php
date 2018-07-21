@extends ('layouts/app')
@section('content')
    <h1>タスク一覧</h1>
    
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6"> 
            @if(count($tasks) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>状態</th>
                            <th>タスク</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                                <td>{{ $task->status }} </td>
                                <td>{{ $task->content }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            @endif
            
            {!! link_to_route('tasks.create', ' タスク更新登録', null, ['class' => 'btn btn-primary glyphicon glyphicon-plus']) !!}
        </div>
    
    
@endsection