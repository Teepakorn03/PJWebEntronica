@extends('layouts/main')

@section('content')
<h1>สมัครงาน</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($jobapp))
            Edit Form
        @else
            สมัครงาน
        @endif
    </div>
    @if(isset($jobapp))
          {{  Form::open(['method'=>'PATCH', 'enctype'=>'multipart/form-data', 'route' => ['formTh.update', $jobapp->id]])}}
    @else
            {{  Form::open(['method'=>'POST', 'enctype'=>'multipart/form-data', 'url' => 'formTh'])}}
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

        <div class="form-group">
          <div class="row">
          <div class="col-xs-2">
          {!! Form::label('ตำแหน่ง', 'ตำแหน่ง')  !!}
          </div>
          <div class="col-xs-5">
              {!!  Form::select('position', ['JAVA Programmer' => 'JAVA Programmer', 'Syetem Analyst' => 'Syetem Analyst'],  'JAVA Programmer', ['class' => 'form-control' ]) !!}
          </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
              <div class="col-xs-2">
                  {{ Form::label('ชื่อ', 'ชื่อ') }}
              </div>
              <div class="col-xs-5">
                  @if(isset($jobapp->name))
                      {{ Form::text('name',$jobapp->name,['class' => 'form-control']) }}
                  @else
                      {{ Form::text('name','',['class' => 'form-control']) }}
                  @endif
              </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
              <div class="col-xs-2">
                  {{ Form::label('นามสกุล', 'นามสกุล') }}
              </div>
              <div class="col-xs-5">
                  @if(isset($jobapp->lastname))
                      {{ Form::text('lastname',$jobapp->lastname,['class' => 'form-control']) }}
                  @else
                      {{ Form::text('lastname','',['class' => 'form-control']) }}
                  @endif
              </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
          <div class="col-xs-2">
          {!! Form::label('เพศ', 'เพศ')  !!}
          </div>
          <div class="col-xs-5">
              {!!  Form::select('gender', ['Female' => 'Female', 'Male' => 'Male'],  'Female', ['class' => 'form-control' ]) !!}
          </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
          <div class="col-xs-2">
          {!! Form::label('อายุ', 'อายุ')  !!}
          </div>
          <div class="col-xs-5">
            @if(isset($jobapp->age))
                {{ Form::text('age',$jobapp->age,['class' => 'form-control']) }}
            @else
                {{ Form::text('age','',['class' => 'form-control']) }}
            @endif
          </div>
        </div>
        </div>


      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('อีเมลล์', 'อีเมลล์') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->email))
                    {{ Form::text('email',$jobapp->email,['class' => 'form-control']) }}
                @else
                    {{ Form::text('email','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('เบอร์โทรศัพท์', 'เบอร์โทรศัพท์') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->telephone))
                    {{ Form::text('telephone',$jobapp->telephone,['class' => 'form-control']) }}
                @else
                    {{ Form::text('telephone','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>


      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                  {{   Form::label('แนบไฟล์ประวัติ', 'แนบไฟล์ประวัติ') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->resume))
                  {{ Form::file('resume', null, ['class'=>'form-control']) }}
                @else
                  {{ Form::file('resume', null, ['class'=>'form-control']) }}
                @endif
            </div>
        </div>
      </div>

        <br>
        <div class="row">
            <div class="col-xs-5">
                {!!  Form::submit('บันทึก', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection
