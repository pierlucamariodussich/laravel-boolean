@extends('layout.boolean')
@section('user')
   <div class="container ">
      <div class="row">
         <div class="col-6">
            <div class="img_user d-flex  align-items-center justify-content-end">
               <i class="fas fa-angle-left"></i>
               <div class="img_box" style="background-image: url({{$user['image']}})"></div>
               <i class="fas fa-angle-right"></i>
           </div>
         </div>
         <div class="col-6 d-flex align-items-center justify-content-baseline">
            <div class="txt_user d-flex flex-column align-items-start justify-content-center">
               <p>ID: <span>{{$user['id']}}</span></p>
               <p>Nome: <span>{{$user['first_name']}}</span></p>
               <p>Cognome: <span>{{$user['last_name']}}</span></p>
               <p>Email: <span>{{$user['email']}}</span></p>
            </div>
         </div>
      </div>
   </div>
@endsection


