@extends('layouts/app')

@section('content')
  <h1>Home</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif


    <div class="col-xs-5">
      {{ Html::link('jobapps/create', 'Add New', array(
          'class' => 'btn btn-primary'
  ))}}



</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>position</th>
            <th>name</th>
            <th>lastname</th>
            <th>gender</th>
            <th>age</th>
            <th>brithday</th>
            <th>nationality</th>
            <th>address</th>
            <th>email</th>
            <th>telephone</th>
            <th>currentposition</th>
            <th>education</th>
            <th>experience</th>
            <th>expectedsalary</th>
            <th>resume</th>

            <th width="200">Action</th>
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
              <td> {{ $p['brithday'] }} </td>
              <td> {{ $p['nationality'] }} </td>
              <td> {{ $p['address'] }} </td>
              <td> {{ $p['email'] }} </td>
              <td> {{ $p['telephone'] }} </td>
              <td> {{ $p['currentposition'] }} </td>
              <td> {{ $p['education'] }} </td>
              <td> {{ $p['experience'] }} </td>
              <td> {{ $p['expectedsalary'] }} </td>
              <td> {{ $p['resume'] }} </td>



        <td>
            {{ Form::open(['route' => ['jobapps.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('jobapps/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}
            {{ Form::submit('Delete',array('class' => 'btn btn-primary')) }}
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
