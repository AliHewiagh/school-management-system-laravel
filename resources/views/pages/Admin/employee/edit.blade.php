@extends('main')


@section('content')
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  @include('pages.admin.partial._adminNav')
  {{-- end Navigation --}}



<div class="content-wrapper">
	 <div class="container-fluid">
	 	<!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> Add New Employee</li>
      </ol>

	   <div class="row">
	   	  <div class="col-md-10 col-md-offset-1 ">
            <h4>Insert Employee Info</h4>
            <hr>

          {!! Form::open(['route' => ['employee.update', $Employee->id], 'data-parsley-validate' => '']) !!}
    			{{ Form::label('title', 'Name :') }}
    			{{ Form::text('name', $Employee->name , array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}
    			{{ Form::label('title', 'Username :') }}
    			{{ Form::text('username', $Employee->username, array('class' => 'form-control', 'required' => '', 'maxlength' => '50')) }}

          {{ Form::label('title', 'Position :') }}
          {{ Form::text('position', $Employee->position, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}

          {{ Form::label('title', 'Salary :') }}
          {{ Form::text('salary', $Employee->salary, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}


    			{{ Form::label('title', 'E-mail :') }}
    			{{ Form::text('email', $Employee->email, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}


          {{ Form::label('title', 'Phone Number :') }}
          {{ Form::text('phone_number', $Employee->phone_number, array('class' => 'form-control', 'required' => '', 'maxlength' => '100')) }}
    			
          {{ Form::hidden('_method', 'PUT')}}
    			{{ Form::submit('Update', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px; margin-bottom: 20px;')) }}
			{!! Form::close() !!}
	   	  </div>
	   </div>
	  </div>
    </div>




 @include('pages.admin.partial._scrolupLogout')
@include('pages.admin.partial._scripts')
</body>
@endsection










































