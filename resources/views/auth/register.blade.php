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
                        <label for="exampleInputEmail1" class="form-label">Nome Artista</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci Mail</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark d-flex align-items-center justify-content-center ">Registrati</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>