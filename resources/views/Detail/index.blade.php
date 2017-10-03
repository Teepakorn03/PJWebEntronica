@extends('layouts/app')

@section('content')
  <h1 align="center" >Detail Job</h1>
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
  <!-- ดึงข้อมูลมาโชว์จาก database  -->
<div align="center" class="col-xs-6"><br></div>
<table align="center" class="table table-bordered" style="width80%;">
  <thead>
      <tr>
          <th width='2%'>ID</th>
          <th>position</th>
          <th>subheading</th>
          <th>No.1</th>
          <th>No.2</th>
          <th>No.3</th>
          <th>No.4</th>
          <th>No.5</th>

          <th>subheading1</th>
          <th>No.9</th>
          <th>No.10</th>
          <th>No.11</th>
          <th>No.12</th>
          <th>No.13</th>


          <th width="100">Action</th>
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
            <td> {{ $p['No1'] }} </td>
            <td> {{ $p['No2'] }} </td>
            <td> {{ $p['No3'] }} </td>
            <td> {{ $p['No4'] }} </td>

            <td> {{ $p['subheading1'] }} </td>
            <td> {{ $p['detail1'] }} </td>
            <td> {{ $p['No8'] }} </td>
            <td> {{ $p['No9'] }} </td>
            <td> {{ $p['No10'] }} </td>
            <td> {{ $p['No11'] }} </td>



      <td>
        <!---ปุ่ม ส่งค่าไอด เพื่อ ลบหรือแก้ไข ---------->
          {{ Form::open(['route' => ['DetailJobTh.destroy',$p['id'], 'method' => "DELETE"] ]) }}
          <input type="hidden" name="_method" value="delete" />
          {{ Html::link('DetailJobTh/'.$p['id'].'/edit', 'Edit', array('class'=> 'btn btn-primary')) }}
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;
          {{ Form::submit('Delete',array('class' => 'btn btn-primary')) }}
          {{ Form::close() }}
      </td>

    </tr>
      @empty
      <tr>
          <td colspan="15">No data!!</td>
      </tr>
        @endforelse
</tbody>
  </table>


    @endsection
