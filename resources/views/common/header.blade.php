<header>
    <div class="news container ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class=" col-12 d-flex align-items-center justify-content-center">
                <div class="circle d-flex  align-items-center justify-content-center"> <i class="fa fa-bell" aria-hidden="true"></i> </div>
                <div class="text_news d-flex align-items-center">
                    <p> PROSSIMO CORSO IN PARTENZA:</p>
                    <p> 10 MARZO</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="">
        <div class="row ">
            <div class="col-3 logo d-flex align-items-center">
                <img src="img/logo.png" alt="logo boolean">
            </div>
            <div class="col-9 navigation d-flex align-items-center justify-content-end ">
                    {{-- inserire un ciclo foreach che permette di generare le varie pagine
                        del sito e gestire la classe active su a  --}}
                @foreach (config('menu.pages') as $page)
                        <li class="{{ Route::currentRouteName() == $page['pathId'] ? 'active' : '' }}">
                            <a href="{{route($page['pathId'])}}">{{$page['displaytext']}}</a>
                        </li>
                @endforeach 
                   <div class="btn d-flex align-items-center justify-content-center"> <a href="">Candidati Ora</a></div>
            </div>
        </div>
    </nav>
</header>