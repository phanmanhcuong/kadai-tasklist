@extends ('layouts/app')
@section ('content')
    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
            <div class="form-group">
                {!! Form::label('status', '状態：') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('content', 'タスク：') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            
            {!! Form::button('<i class="glyphicon glyphicon-saved"> 登録</i>', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
@endsection