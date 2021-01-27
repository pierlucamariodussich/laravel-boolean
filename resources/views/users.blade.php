@extends('layout.boolean')
@section('users')
<div class="container user_list">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <h1>Utenti Iscritti</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex flex-wrap align-items-center justify-content-center">
           
           @foreach ($user as $member)
              
           
            <div class="user_box ">
                <div class='logobox d-flex align-items-center justify-content-center'>
                    <img src="img/logo-white.png" alt="logo boolean">
                </div>
                <div class="img_user d-flex align-items-center justify-content-center">
                    <i class="fas fa-angle-left"></i>
                    <div class="img_box" style="background-image: url({{$member['image']}})"></div>
                    <i class="fas fa-angle-right"></i>
                </div>
                <p>ID: <span>{{$member['id']}}</span></p>
                <p>Nome: <span>{{$member['first_name']}}</span></p>
                <p>Cognome: <span>{{$member['last_name']}}</span></p>
                <p>Email: <span>{{$member['email']}}</span></p>
            </div>

            @endforeach 


            
        </div>
    </div>
</div>

@endsection