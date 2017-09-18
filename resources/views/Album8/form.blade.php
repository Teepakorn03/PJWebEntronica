@extends('layouts/main')

@section('content')
<h1>Form Code</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($Album8))
            Edit Form
        @else
            Add Form
        @endif
    </div>
    @if(isset($Album8))
          {{  Form::open(['method'=>'PATCH', 'enctype'=>'multipart/form-data', 'route' => ['Album8.update', $Album8->id]])}}
    @else
          {{  Form::open(['method'=>'POST', 'enctype'=>'multipart/form-data', 'url' => 'Album8'])}}
    @endif
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-2">
                  {{   Form::label('photo', 'Photo') }}
            </div>
            <div class="col-xs-5">
                @if(isset($Album8->image))
                  {{ Form::file('image', null, ['class'=>'form-control']) }}
                @else
                  {{ Form::file('image', null, ['class'=>'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('title', 'Title') }}
            </div>
            <div class="col-xs-5">
                @if(isset($Album8->name))
                    {{ Form::text('name',$Album8->title,['class' => 'form-control']) }}
                @else
                    {{ Form::text('name','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-5">
                {!!  Form::submit('save', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection
