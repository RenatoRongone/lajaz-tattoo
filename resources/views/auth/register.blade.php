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
                            <button type="button" class="input-group-text" id="basic-addon1">
                                <i class="fa-regular fa-eye cursor" id='eye'></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Conferma Password</label>
                        <div class="input-group">    
                            <input name="password_confirmation" type="password" class="form-control" id="confirm_password">
                            <button type="button" class="input-group-text" id="basic-addon1">
                                <i class="fa-regular fa-eye cursor" id='eye_conf'></i>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark d-flex align-items-center justify-content-center ">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>