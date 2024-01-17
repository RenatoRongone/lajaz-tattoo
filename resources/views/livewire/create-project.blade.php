<div class="col-6">
    <form wire:submit.prevent='store'>
        <div class="mb-3">
            <label for="titleProject" class="form-label">Titolo</label>
            <input wire:model='title' type="text" class="form-control" id="titleProject" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="descriptionProject" class="form-label">Descrizione</label>
            <input wire:model='description' type="text" class="form-control" id="descriptionProject">
        </div>
        <div class="d-flex justify-content-center ">
            <button type="submit" class="btn btn-dark">Carica Progetto</button>
        </div>
    </form>
</div>
