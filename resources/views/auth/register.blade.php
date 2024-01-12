<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center ">
            <div class="col-12 mt-3">
                <h1 class="text-center textDark">
                    Registrati
                </h1>
            </div>
            <div class="col-6">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Artista</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci Mail</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">    
                            <input name="password" type="password" class="form-control" id="password">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa-regular fa-eye cursor" id='openEye'></i>
                                {{-- fare js per occhio con il cambio della classe da fa-eye a fa-eye-slash con il cambio da type pass a type text --}}
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="confirm_password" aria-describedby="emailHelp">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark d-flex align-items-center justify-content-center ">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>