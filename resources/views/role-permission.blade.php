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
      <div class="card-header d-flex justify-content-between flex-wrap">
       <div class="header-title">
           <h4 class="card-title mb-0">Role &amp; Permission</h4>
       </div>
       <div class="">
           <a href="/add-role-permission" class=" text-center btn btn-primary btn-icon mt-lg-0 mt-md-0 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
               <i class="fa-plus-square"></i>
               <span>New Permission</span>
           </a>
          
           
           
       </div>
   </div>
      <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered w-50">
               <thead>
                   <tr>
                       <th class="">  
                       </th>
                       
                       <th class="text-center">
                           User
                       </th>
                       
                   </tr>
               </thead>
               <tbody>
                   <tr class="">
                       <td class="w-25">Can create user
                       </td>
                       <td class="text-center">
                           <input class="form-check-input" type="checkbox">
                       </td>
                   </tr>
                   <tr class="">
                       <td class="">Can edit User
                       </td>
                       <td class="text-center">
                           <input class="form-check-input" type="checkbox">
                       </td>
                   </tr>
                   <tr class="">
                       <td class="">Can delete User  
                       </td>
                       <td class="text-center">
                           <input class="form-check-input" type="checkbox">
                       </td>
                      
                   </tr>
                   <tr class="">
                       <td class="">Can View User
                       </td>
                       <td class="text-center">
                           <input class="form-check-input" type="checkbox">
                       </td>
                   </tr>
               </tbody>
           </table>
           <div class="mt-3">
               <a href="#" type="button" class="btn btn-primary">Save</a>
           </div>
       </div>
   </div>
   </div>
   <footer>
      <p>Copyright © 2020 Dreamguys.</p>
   </footer>
</div>
@endsection
