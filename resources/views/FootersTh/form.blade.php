@extends('layouts/main')

@section('content')
<h1>Form Code</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($Footers))
            Edit Form
        @else
            Add Form
        @endif
    </div>
    @if(isset($Footers))
          {{  Form::open(['method'=>'PATCH', 'enctype'=>'multipart/form-data', 'route' => ['FootersTh.update', $Footers->id]])}}
    @else
          {{  Form::open(['method'=>'POST', 'enctype'=>'multipart/form-data', 'url' => 'FootersTh'])}}
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
                {{ Form::label('title', 'Title') }}
            </div>
            <div class="col-xs-5">
                @if(isset($Footers->title))
                    {{ Form::text('title',$Footers->title,['class' => 'form-control']) }}
                @else
                    {{ Form::text('title','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('description', 'Description') }}
            </div>
            <div class="col-xs-5">
                @if(isset($Footers->description))
                    {{ Form::text('description',$Footers->description,['class' => 'form-control']) }}
                @else
                    {{ Form::text('description','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('facebook', 'Facebook') }}
            </div>
            <div class="col-xs-5">
                @if(isset($Footers->Facebook))
                    {{ Form::text('Facebook',$Footers->Facebook,['class' => 'form-control']) }}
                @else
                    {{ Form::text('Facebook','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('twitter', 'Twitter') }}
            </div>
            <div class="col-xs-5">
                @if(isset($Footers->Twitter))
                    {{ Form::text('Twitter',$Footers->Twitter,['class' => 'form-control']) }}
                @else
                    {{ Form::text('Twitter','',['class' => 'form-control']) }}
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
