@extends('main')


@section('content')



        <!-- Page Content -->
<div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>




    <div class="container content">
        <div class="row">
            <div class="col-md-12">
     @include('partial._navbar')

        <div class="navbar navbar-default  white-color ">
        
        <h1>Welcome Ali Omran</h1> 
       </div>

      <div class="jumbotron white-color" >
       
           <div class="container" style="background-color: #f5f5f5; padding: 0px;">
            <div><h3>Your Childeren</h3> </div>
            <hr>
                <ul>
                    <li>Ahmad</li>
                    <li>Rashid</li>
                    <li>Malik</li>
                </ul> 

           </div>

          {{-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a> --}}
        </p>
      </div>
                    



                         
            </div>
        </div>
    </div>

 </div>
        <!-- /#page-content-wrapper -->


@endsection
