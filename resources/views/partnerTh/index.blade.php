@extends('layouts/app')

@section('content')
  <h1 align="center">Partner</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif


    <div align="right" class="col-xs-10">
      {{ Html::link('partnerTh/create', 'Add New', array(
          'class' => 'btn btn-primary'
  ))}}



</div>
<!-- ดึงข้อมูลมาโชว์จาก database  -->
<div align="center" class="col-xs-6"><br></div>
<table align="center" class="table table-bordered" style="width:70%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>image</th>
            <th>title</th>
            <th>Facebook</th>
            <th>Twitter</th>

            <th width="200">Action</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($partner as $p)
          <tr>
              <td> {{ $p['id'] }} </td>
              <td width="30%"><img width = "200px" src="img/upload/<?php echo $p -> image?>" alt="{{ $p['image'] }}"> </td>
              <td> {{ $p['title'] }} </td>
              <td> {{ $p['Facebook'] }} </td>
              <td> {{ $p['Twitter'] }} </td>



        <td>
          <!---ปุ่ม ส่งค่าไอด เพื่อ ลบหรือแก้ไข ---------->
            {{ Form::open(['route' => ['partnerTh.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('partnerTh/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}&nbsp;
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
