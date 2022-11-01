@extends('incdashboard/layout')
@section('content')
<div class="page-wrapper">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col-sm-12">
               <h3 class="page-title">Welcome Admin!</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item active">Dashboard</li>
               </ul>
            </div>
         </div>
      </div>

      <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-body">
                <form>
                   <div class="row">
                      <div class="col-12">
                         <h5 class="form-title"><span>Add role permission</span></h5>
                      </div>
                      <div class="col-12 col-sm-6">
                         <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Nathan Humphries">
                         </div>
                      </div>
                      <div class="col-12 col-sm-6">
                         <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Stephen Marley">
                         </div>
                      </div>
                      <div class="col-12 col-sm-6">
                         <div class="form-group">
                            <label>Student Id</label>
                            <input type="text" class="form-control" value="PRE1234">
                         </div>
                      </div>
                      <div class="col-12">
                       <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
   </div>
   <footer>
      <p>Copyright © 2020 Dreamguys.</p>
   </footer>
</div>


@endsection
