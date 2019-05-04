<div class="container">
    <nav class="navbar navbar-expand-md navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{route('inicio')}}">
            <img src="/images/logo.jpg" width="35" height="35" class="d-inline-block align-top" alt="">
            Club Niños
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('inicio')}}">Inicio {{--<span class="sr-only">(current)</span>--}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('manualidades.inicio')}}">Manualidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('coloreables.inicio')}}">Coloreables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/KidsClubApp/">Acerca De</a>
                </li>

                {{--<li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>--}}
            </ul>
            {{--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>--}}
        </div>
    </nav>
</div>
