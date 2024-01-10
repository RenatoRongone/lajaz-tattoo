<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary">© 2023 Company, Inc</span>
    </div>
    
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-5">
        <li class="ms-4">
            <a class=" text-body-secondary " href="#">
                <i class="fa-brands fa-facebook textDark"></i>
            </a>
        </li>
        <li class="ms-4">
            <a class=" text-body-secondary" href="#">
                <i class="fa-brands fa-instagram textDark"></i>
            </a>
        </li>
        <li class="ms-4">
            <a class="text-body-secondary" href="#">
                <i class="fa-brands fa-x-twitter textDark"></i>
            </a>
        </li>
        <li class="ms-4">
            <a class="text-body-secondary" href="{{route('register')}}">
                <i class="fa-solid fa-user textDark"></i>
            </a>
        </li>
        <li class="ms-4">
            <a class="text-body-secondary" href="{{route('login')}}">
                <i class="fa-solid fa-right-to-bracket textDark"></i>
            </a>
        </li>
        <li class="ms-4">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn-footer" type="submit">
                    <i class="fa-solid fa-right-from-bracket textDark"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>