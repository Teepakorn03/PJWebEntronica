@extends('layouts/app')

@section('content')
  <h1 align="center" >สินค้า</h1>
  @if(Session::has('message'))
      <div class="alert alert-info">
          {{ Session::get('message') }}
      </div>
  @endif


    <div align="right" class="col-xs-10">
      {{ Html::link('productth/create', 'Add New', array(
          'class' => 'btn btn-primary'
  ))}}



</div>
<!-- ดึงข้อมูลมาโชว์จาก database  -->
<div align="center" class="col-xs-6"><br></div>
<table align="center" class="table table-bordered" style="width:70%;">
    <thead>
        <tr>
            <th>ID</th>
            <th>รูปภาพ</th>
            <th>หัวข้อ</th>
            <th>รายละเอียด</th>

            <th width="200">Action</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ($product as $p)
          <tr>
              <td> {{ $p['id'] }} </td>
              <td width="30%"><img width="190px" height="180px" src="img/upload/<?php echo $p -> image?>" alt="{{ $p['image'] }}"> </td>
              <td> {{ $p['title'] }} </td>
              <td> {{ $p['description'] }} </td>


        <td>
          <!---ปุ่ม ส่งค่าไอด เพื่อ ลบหรือแก้ไข ---------->
            {{ Form::open(['route' => ['productth.destroy',$p['id'], 'method' => "DELETE"] ]) }}
            <input type="hidden" name="_method" value="delete" />
            {{ Html::link('productth/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}&nbsp;
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
