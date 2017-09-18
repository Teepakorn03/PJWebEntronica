@extends('layouts/app')

@section('content')
  <h1 align="center">Album 4</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif
  <div align="right" class="col-xs-10">
        {{ Html::link('Album3/create', 'Add New', array(
            'class' => 'btn btn-primary'
    ))}}

  </div>
  <div align="center" class="col-xs-6"><br></div>
<table align="center" class="table table-bordered" style="width:70%;">
    <thead>
      <tr>
          <th>ID</th>
          <th>image</th>
          <th>name</th>

          <th width="200">Action</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      @forelse ($Album3 as $p)
        <tr>
            <td> {{ $p['id'] }} </td>
            <td width="30%"><img  width="200px"  src="img/upload/<?php echo $p -> image?>" alt="{{ $p['image'] }}"> </td>
            <td> {{ $p['name'] }} </td>




      <td>
          {{ Html::link('Album3/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}
          {{ Form::open(['route' => ['Album3.destroy',$p['id'], 'method' => "DELETE"] ]) }}
          <input type="hidden" name="_method" value="delete" />

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
