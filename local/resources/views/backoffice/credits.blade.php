@extends('backoffice.layouts.master')
@section('title')
  การจัดการสินเชื่อส่วนบุคคล
@endsection
@section('css')

@endsection
@section('content')
@php
$active = 'dashboard';
@endphp
<div class="pcoded-content">
   <div class="pcoded-inner-content">
       <!-- Main-body start -->
       <div class="main-body">
           <div class="page-wrapper">
               <!-- Page-body start -->
               <div class="page-body">
                  <div class="row">
                     <div class="col-12 text-center">
                      การจัดการสินเชื่อส่วนบุคคล


<br>
<br>
                <a class="btn btn-primary btn-sm" href=""><i class="fa fa-plus"></i>&nbsp;สร้าง</a>


<div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-5">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                       
                                          
                                        </th>
                                        <th>
                                       
                                          
                                        </th>
                                       
                                        <th class="text-center">
                                        
                                          
                                        </th>
                                     
                                    </tr>
                                </thead>

                                
                                <tbody>
                                   
                                   <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                           
                                        </td>
                                        <td class="text-center">
                                           
                                            <a title="แก้ไข" href="" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>

                                            <a title="ลบ" onclick="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                           

                                        
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="5" class="text-center">
                                      
                                            
                                        </td>
                                    </tr>
                                 
                                </tbody>
                            </table>
                     </div>
                  </div>
               </div>
           </div>
       </div>
   </div>
</div>

@endsection
@section('js')

@endsection
