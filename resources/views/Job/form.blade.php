@extends('layouts/main')

@section('content')
<h1>Job Form</h1>
<div class="panel panel-primary">
    <div class="panel-heading">
        @if(isset($jobapp))
            Edit Form
        @else
            Job Form
        @endif
    </div>
    @if(isset($jobapp))
          {{  Form::open(['method'=>'PATCH', 'enctype'=>'multipart/form-data', 'route' => ['jobapp.update', $jobapp->id]])}}
    @else
          {{  Form::open(['method'=>'POST', 'enctype'=>'multipart/form-data', 'url' => 'jobapps'])}}
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
          {!! Form::label('position', 'Position')  !!}
          </div>
          <div class="col-xs-5">
              {!!  Form::select('position', ['JAVA Programmer' => 'JAVA Programmer', 'Syetem Analyst' => 'Syetem Analyst'],  'JAVA Programmer', ['class' => 'form-control' ]) !!}
          </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
              <div class="col-xs-2">
                  {{ Form::label('name', 'Name') }}
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
                  {{ Form::label('lastname', 'Lastname') }}
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
                      {!! Form::label('gender', 'Gender') !!}
              </div>

              <div class="col-xs-5">
                  <div class="radio">

                      {!! Form::radio('gender', 'Female', true, ['id' => 'Female']) !!}
                      {!! Form::label('female', 'Female') !!}

                  </div>

                  <div class="radio">

                      {!! Form::radio('gender', 'Male', false, ['id' => 'Male']) !!}
                      {!! Form::label('male', 'Male') !!}
                  </div>
            </div>


        </div>
      </div>

        <div class="form-group">
          <div class="row">
          <div class="col-xs-2">
          {!! Form::label('age', 'Age')  !!}
          </div>
          <div class="col-xs-5">
              {!!  Form::select('age', ['20' => '20', '21' => '21'],  '20', ['class' => 'form-control' ]) !!}
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
              <div class="col-xs-2">
                  {{ Form::label('brithday', 'Brithday') }}
              </div>
              <div class="col-xs-5">
                  @if(isset($jobapp->brithday))
                      {{ Form::text('brithday',$jobapp->brithday,['class' => 'form-control']) }}
                  @else
                      {{ Form::text('brithday','',['class' => 'form-control']) }}
                  @endif
              </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
              <div class="col-xs-2">
                  {{ Form::label('nationality', 'Nationality') }}
              </div>
              <div class="col-xs-5">
                  @if(isset($jobapp->nationality))
                      {{ Form::text('nationality',$jobapp->nationality,['class' => 'form-control']) }}
                  @else
                      {{ Form::text('nationality','',['class' => 'form-control']) }}
                  @endif
              </div>
          </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('address', 'Address') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->address))
                    {{ Form::text('address',$jobapp->address,['class' => 'form-control']) }}
                @else
                    {{ Form::text('address','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('email', 'Email') }}
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
                {{ Form::label('telephone', 'Telephone') }}
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
                {{ Form::label('currentposition', 'Currentposition') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->currentposition))
                    {{ Form::text('currentposition',$jobapp->currentposition,['class' => 'form-control']) }}
                @else
                    {{ Form::text('currentposition','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('education', 'Education') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->education))
                    {{ Form::text('education',$jobapp->education,['class' => 'form-control']) }}
                @else
                    {{ Form::text('education','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('experience', 'Experience') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->experience))
                    {{ Form::text('experience',$jobapp->experience,['class' => 'form-control']) }}
                @else
                    {{ Form::text('experience','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                {{ Form::label('expectedsalary', 'Expectedsalary') }}
            </div>
            <div class="col-xs-5">
                @if(isset($jobapp->expectedsalary))
                    {{ Form::text('expectedsalary',$jobapp->expectedsalary,['class' => 'form-control']) }}
                @else
                    {{ Form::text('expectedsalary','',['class' => 'form-control']) }}
                @endif
            </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
            <div class="col-xs-2">
                  {{   Form::label('resume', 'Resume') }}
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
                {!!  Form::submit('save', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection
