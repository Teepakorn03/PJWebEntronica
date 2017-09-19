@extends('layouts/main')

@section('content')
<h1>Form Code</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($detail))
            Edit Form
        @else
            Add Form
        @endif
    </div>
    @if(isset($detail))
          {{  Form::open(['method'=>'PATCH', 'enctype'=>'multipart/form-data', 'route' => ['DetailJob.update', $detail->id]])}}
    @else
          {{  Form::open(['method'=>'POST', 'enctype'=>'multipart/form-data', 'url' => 'DetailJob'])}}
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
                {{ Form::label('position', 'Position') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->title))
                    {{ Form::text('title',$detail->title,['class' => 'form-control']) }}
                @else
                    {{ Form::text('title','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('subheading', 'Subheading') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->subheading))
                    {{ Form::text('subheading',$detail->subheading,['class' => 'form-control']) }}
                @else
                    {{ Form::text('subheading','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('detail', 'Detail') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->detail))
                    {{ Form::text('detail',$detail->detail,['class' => 'form-control']) }}
                @else
                    {{ Form::text('detail','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>




        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('subheading1', 'Subheading1') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->subheading1))
                    {{ Form::text('subheading1',$detail->subheading1,['class' => 'form-control']) }}
                @else
                    {{ Form::text('subheading1','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>


        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('detail1', 'Detail1') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->detail1))
                    {{ Form::text('detail1',$detail->detail1,['class' => 'form-control']) }}
                @else
                    {{ Form::text('detail1','',['class' => 'form-control']) }}
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
