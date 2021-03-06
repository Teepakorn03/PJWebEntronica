@extends('layouts/main')

@section('content')
<h1>Form Code</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($partner))
            Edit Form
        @else
            Add Form
        @endif
    </div>
    @if(isset($partner))
          {{  Form::open(['method'=>'PATCH', 'enctype'=>'multipart/form-data', 'route' => ['partnerTh.update', $partner->id]])}}
    @else
          {{  Form::open(['method'=>'POST', 'enctype'=>'multipart/form-data', 'url' => 'partnerTh'])}}
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
                @if(isset($partner->image))
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
                @if(isset($partner->title))
                    {{ Form::text('title',$partner->title,['class' => 'form-control']) }}
                @else
                    {{ Form::text('title','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('facebook', 'Facebook') }}
            </div>
            <div class="col-xs-5">
                @if(isset($partner->Facebook))
                    {{ Form::text('Facebook',$partner->Facebook,['class' => 'form-control']) }}
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
                @if(isset($partner->Twitter))
                    {{ Form::text('Twitter',$partner->Twitter,['class' => 'form-control']) }}
                @else
                    {{ Form::text('Twitter','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-5">
                {!!  Form::submit('save', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection
