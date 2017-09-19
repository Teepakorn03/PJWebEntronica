@extends('layouts/app')

@section('content')
  <h1 align="center" >Product</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif


    <div align="right" class="col-xs-10">
      {{ Html::link('DetailJob/create', 'Add New', array(
          'class' => 'btn btn-primary'
  ))}}



</div>
<div align="center" class="col-xs-6"><br></div>
<table align="center" class="table table-bordered" style="width:70%;">
    <thead>
        <tr>
            <th width='2%'>ID</th>
            <th>position</th>
            <th>subheading</th>
            <th>detail</th>
            <th>subheading1</th>
            <th>detail1</th>

            <th width="200">Action</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($detail as $p)
          <tr>
              <td> {{ $p['id'] }} </td>
              <td> {{ $p['title'] }} </td>
              <td> {{ $p['subheading'] }} </td>
              <td> {{ $p['detail'] }} </td>
              <td> {{ $p['subheading1'] }} </td>
              <td> {{ $p['detail1'] }} </td>


        <td>
            {{ Form::open(['route' => ['DetailJob.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('DetailJob/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}&nbsp;
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
