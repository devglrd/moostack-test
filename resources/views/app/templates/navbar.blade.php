<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Moostack</h5>
    @if(!Auth::check())
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ action('App\StaticsController@showAnnuaire') }}">Annuaire</a>
            <a class="p-2 text-dark" href="{{ action('App\EventsController@index') }}">Evenements</a>
        </nav>
        <a class="btn btn-outline-primary" href="{{ action('Auth\LoginController@showLoginForm') }}">Connexion</a>
    @else
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ action('App\AccountController@showDashboard') }}">Mon Dashboard</a>
            <a class="p-2 text-dark" href="{{ action('App\AccountController@showAccount') }}">Mon Book</a>
            <a class="p-2 text-dark" href="{{ action('App\AccountController@showDocument') }}">Mes Documents</a>
            <a class="p-2 text-dark" href="{{ action('App\AccountController@showSkill') }}">Mes Compétences</a>
            <a class="p-2 text-dark" href="{{ action('App\AccountController@showEvaluations') }}">Mes évaluations</a>
            <a class="p-2 text-dark" href="{{ action('App\StaticsController@showAnnuaire') }}">Annuaire</a>
            <a class="p-2 text-dark" href="{{ action('App\StaticsController@showSearch') }}">Recherche</a>
        </nav>
        <a class="btn btn-outline-primary" href="{{ action('App\AccountController@logout') }}">Déconnexion</a>
    @endif

</div>

