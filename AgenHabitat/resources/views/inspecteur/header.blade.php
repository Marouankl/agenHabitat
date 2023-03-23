



    <div class="container text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo d'Agen Habitat" height="70px" width="70px">
            </div>
            <div class="col"> <a href="{{route('inspecteur.tournee')}}"> Tournées </a> </div>
            <div class="col"> <a href=""> Calendrier </a> </div>
            <div class="col">{{$user->getAttribute('Nom')}} [photo] + [dropdown]</div>
        </div>
    </div>
