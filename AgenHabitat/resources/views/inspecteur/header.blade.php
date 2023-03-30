

<div class="row align-items-start" style="min-height:15vh;">

    <div class="container text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo d'Agen Habitat" height="70px" width="70px">
            </div>
            <div class="col"> <a href="{{route('inspecteur.planifie', ['objet' => 'tournee' ])}}"> Tournées </a> </div>
            <div class="col"> <a href="{{route('inspecteur.planifie', ['objet' => 'calendrier' ])}}"> Calendrier </a> </div>
            <div class="col">
                <div>
                    <img class="img-icon-profil" height="70px" width="70px" src="{{ asset('images/femelle.png') }}" alt="Profil">
                </div>
                <div>
                    {{$user->getAttribute('Nom')}}
                </div>
            </div>
        </div>
    </div>
</div>
