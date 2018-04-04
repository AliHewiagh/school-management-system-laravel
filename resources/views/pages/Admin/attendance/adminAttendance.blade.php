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
        <li class="breadcrumb-item active"> Attendance</li>
      </ol>

	<h1>Attendance</h1>
	  </div>
    </div>

 @include('pages.admin.partial._scrolupLogout')
@include('pages.admin.partial._scripts')
</body>
@endsection