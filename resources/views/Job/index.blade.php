@extends('layouts/app')

@section('content')




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
<table class="table table-bordered" style="width:80%;" align="center">
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

            <th width="300px">Action</th>
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
              <td>

                <a href="Job/{{$p->resume}}" download="{{$p->resume}}">

                    <i class="">
                      {{ $p['resume'] }}
                    </i>

                  </a>
              </td>



        <td>
            {{ Form::open(['route' => ['jobapp.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('jobapp/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}
            &nbsp;
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
