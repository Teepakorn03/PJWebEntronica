@extends('layouts/app')

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <h1 align="center" >Job</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif


    <div align="right" class="col-xs-10">

        {{ Html::link('jobapp/create', 'Add New', array(
            'class' => 'btn btn-primary'
    ))}}

</div>
<div align="center" class="col-xs-6"><br></div>
<table class="table table-bordered" style="width:70%;" align="center">
    <thead>
        <tr>
            <th>ID</th>
            <th>position</th>
            <th>name</th>
            <th>lastname</th>
            <th>gender</th>
            <th>age</th>
            <th>email</th>
            <th>telephone</th>
            <th>resume</th>

            <th width="200px">Action</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($jobapp as $p)
          <tr>
              <td> {{ $p['id'] }} </td>
              <td> {{ $p['position'] }} </td>
              <td> {{ $p['name'] }} </td>
              <td> {{ $p['lastname'] }} </td>
              <td> {{ $p['gender'] }} </td>
              <td> {{ $p['age'] }} </td>
              <td> {{ $p['email'] }} </td>
              <td> {{ $p['telephone'] }} </td>
              <td> {{ $p['resume'] }} </td>



        <td>
            {{ Form::open(['route' => ['jobapp.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('jobapp/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}
            {{ Form::submit('Delete',array('class' => 'btn btn-primary')) }}
            <a href="Job/{{$p->resume}}" download="{{$p->resume}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									Download
								</i>
								</button>
							</a>
  {{ Form::close() }}


        </td>

      </tr>
        @empty
        <tr>
            <td colspan="6">No data!!</td>
        </tr>
          @endforelse
  </tbody>
  </table>


    @endsection
