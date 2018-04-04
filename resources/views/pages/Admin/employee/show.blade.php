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
        <li class="breadcrumb-item active"> New Employee</li>
      </ol>
       
       @include('pages.admin.partial._messages')


  
    <div class="row ">
        <div class="col-md-6 col-lg-4 g-mb-30 ">
      
        </div>
        
        <div class="col-md-6 col-lg-4 g-mb-30">
          <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
            <img class="d-inline-block img-fluid mb-4" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
            <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Name: {{ ucfirst($employee->name) }}</h4>
            <p>Username: {{ $employee->username }}</p>
             <span class="d-block g-color-primary g-font-size-16">Start Date: {{ $employee->created_at }}</span>
              <span class="d-block g-color-primary g-font-size-16">Position: Math Teacher</span>
             <span class="d-block g-color-primary g-font-size-16">Salary: $3000</span>
            <span class="d-block g-color-primary g-font-size-16">Phone Number: 01123159383</span>
            <span class="d-block g-color-primary g-font-size-16">E-mail: {{ $employee->email }}</span>


            <span class="d-block g-color-primary g-font-size-16"> 
            
              <a style="height: 15px;" href="/employee/{{ $employee->id }}/edit"><span class="badge badge-primary">Update</span></a>
              {{-- Start form here  --}}
               {!! Form::open(['route' => ['employee.destroy', $employee->id], 'method' => 'DELETE']) !!}
              <a href="" disabled class="badge badge-danger ">{{ Form::submit('Delete', array('class' => 'delete-btn')) }}</a> 
              {!! Form::close() !!}
              {{-- End form here  --}}
              
            </span>
            
          </article>
        </div>


        
        <div class="col-md-6 col-lg-4 g-mb-30">
         {{--  <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
            <img class="d-inline-block img-fluid mb-4" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Image Description">
            <h4 class="h5 g-color-black g-font-weight-600 g-mb-10">Product name</h4>
            <p>Finding your perfect product</p>
            <span class="d-block g-color-primary g-font-size-16">$50.00</span>
          </article> --}}
        </div>
    </div>

	  </div>
    </div>




 @include('pages.admin.partial._scrolupLogout')
@include('pages.admin.partial._scripts')
</body>
@endsection










































