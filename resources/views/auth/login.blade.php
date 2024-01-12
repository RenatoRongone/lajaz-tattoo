<x-layout>
    <div class="container mt-5 pt-5 h-custom">
        <div class="row justify-content-center ">
            <div class="col-12 mt-3">
                <h1 class="text-center textDark">
                    Accedi
                </h1>
            </div>
            <div class="col-6">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci Mail</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <div class="input-group">    
                            <input name="password" type="password" class="form-control" id="pass_log">
                            <button type="button" class="input-group-text" id="basic-addon1">
                                <i class="fa-regular fa-eye cursor" id='eye_log'></i>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark d-flex align-items-center justify-content-center">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>