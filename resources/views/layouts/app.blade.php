<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="resources/css/style.css" media="screen" type="text/css"/>

<style>
    body {
        background: linear-gradient(to right, #ffed4a , #38c172);
        min-height: 100vh
    }
    .navbar {
        background: #000000
    }

    right {
        text-align: center;
    }

    .nav-item::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: cornflowerblue;
        transition: 0.4s
    }

    .nav-item:hover::after {
        width: 100%
    }

    .navbar-dark .navbar-nav .active>.nav-link,
    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .show>.nav-link,
    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: #ffffff;
    }

    .nav-link {
        padding: 16px 10px;
        transition: 0.2s
    }

    body {
        background-color: white;
    }
    #logo{text-align: center; padding-top: 30px;}



</style>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li>
                <a class="nav-link" >74You</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('formulaireReservation')}}">Formulaire de réservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{('/tableauDeBord')}}">Tableau de Bord</a>
            </li>

        </ul>
    </div>
    <div class="right">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{('/login')}}">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>


