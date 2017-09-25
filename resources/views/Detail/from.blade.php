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
                {{ Form::label('no1', 'No1') }}
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
                {{ Form::label('no2', 'No2') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No1))
                    {{ Form::text('No1',$detail->No1,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No1','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('no3', 'No3') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No2))
                    {{ Form::text('No2',$detail->No2,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No2','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('no4', 'No4') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No3))
                    {{ Form::text('No3',$detail->No3,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No3','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('no5', 'No5') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No4))
                    {{ Form::text('No4',$detail->No4,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No4','',['class' => 'form-control']) }}
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
                {{ Form::label('no1', 'No1') }}
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
            <div class="col-xs-2">
                {{ Form::label('no2', 'No2') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No8))
                    {{ Form::text('No8',$detail->No8,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No8','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('no3', 'No3') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No9))
                    {{ Form::text('No9',$detail->No9,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No9','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('no4', 'No4') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No10))
                    {{ Form::text('No10',$detail->No10,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No10','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('no5', 'No5') }}
            </div>
            <div class="col-xs-5">
                @if(isset($detail->No11))
                    {{ Form::text('No11',$detail->No11,['class' => 'form-control']) }}
                @else
                    {{ Form::text('No11','',['class' => 'form-control']) }}
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
