<header>
    <div class="news container ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class=" col-12 d-flex align-items-center justify-content-center">
                <marquee
                        class='d-flex  align-items-center'
                        loop="-1"
                        behavior='scrool'
                        scrollamount="3"
                        scrolldelay="5"
                        direction="left"
                        height="30"
                        width="1920"
                        align="center">
                        <p><i class="fa fa-bell" aria-hidden="true"></i> PROSSIMO CORSO IN PARTENZA: <span> 10 MARZO </span></p>
                </marquee>
            </div>
        </div>
    </div>
    <nav class="">
        <div class="row ">
            <div class="col-3 logo d-flex align-items-center">
                <img src={{asset("img/logo.png")}} alt="logo boolean">
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