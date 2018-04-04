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
        <li class="breadcrumb-item active"> Expenses</li>
      </ol>


      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
               <tbody>
              @foreach($employee as $employe)
                 <tr>
                  <td>{{ $employe->name }}</td>
                  <td>{{ $employe->username }}</td>
                  <td>{{ $employe->email }}</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>

              @endforeach
             </tbody>
                
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>


	  </div>
    </div>

 @include('pages.admin.partial._scrolupLogout')
@include('pages.admin.partial._scripts')
</body>
@endsection