@extends('layouts/app')

@section('content')
  <h1>About</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif


    <div class="col-xs-5">
      {{ Html::link('about/create', 'Add New', array(
          'class' => 'btn btn-primary'
  ))}}



</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>image</th>
            <th>title</th>
            <th>description</th>
            <th width="200">Action</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($about as $p)
          <tr>
              <td> {{ $p['id'] }} </td>
              <td width="30%"><img width="30%" src="img/upload/<?php echo $p -> image?>" alt="{{ $p['image'] }}"> </td>
              <td> {{ $p['title'] }} </td>
              <td>{{ $p['description'] }}</td>



        <td>
            {{ Form::open(['route' => ['about.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('about/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}
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
