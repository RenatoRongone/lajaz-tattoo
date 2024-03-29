<nav class="navbar navbar-expand-lg bg-dark fixed-top ">
    <div class="container-fluid ">
        <a class="navbar-brand textWhite ps-5" href="{{route('welcome')}}">
            <img src="/media/logoB.png" alt="Logo" class="logo-custom">
        </a>
        <button class="navbar-toggler btn-nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" justify-content-center">
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('artistpage')}}">Chi sono</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('works')}}">I miei lavori</a>
                    </li>
                    @if(Auth::user())
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('sendmessage')}}">Invia Messaggio</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>