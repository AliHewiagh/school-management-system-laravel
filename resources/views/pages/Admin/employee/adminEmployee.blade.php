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
        <li class="breadcrumb-item active"> Employee</li>
         <li class="breadcrumb-item active"><a href="employee/create">Add Employee</a></li>
      </ol>



  @include('pages.admin.partial._messages')




      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Employee Table</div>
        <div class="card-body">
          <div class="table-responsive">

         @if(count($employee) > 0)
      
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  {{-- <th>Email</th> --}}
                  <th>Position</th>
                  <th>Start date</th>
                  
                  <th>Edit/Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  {{-- <th>Email</th> --}}
                  <th>Position</th>
                  <th>Start date</th>
                  
                  <th>Edit/Delete</th>
                </tr>
              </tfoot>
                 <tbody>
              @foreach($employee as $employe)
                 <tr>
                  <td>{{ $employe->name }}</td>
                  <td>{{ $employe->username }}</td>
                  {{-- <td>{{ $employe->email }}</td> --}}
                  <td>Teacher</td>
                  <td>{{ $employe->created_at}}</td>
                  {{-- <td>$320,800</td> --}}
                  <td >
                    
                    <a href="/employee/{{$employe->id}}" class="btn btn-info">More</a>
                    
                
                  </td>  
                </tr>

              @endforeach
             </tbody>
            </table>

            


          </div>
        </div>

        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>

       @else
       <div class="alert alert-dismissible alert-danger">
            {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
            <strong>Oh!</strong> No Employee at this time <a href="employee/create">Click here to add</a>.
          </div>
      @endif

   
    
    @include('pages.admin.partial._scrolupLogout') 
   @include('pages.admin.partial._scripts')

    
  </div>
</body>





@endsection
