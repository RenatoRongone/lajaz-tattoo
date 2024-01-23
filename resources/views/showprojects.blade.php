<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Nel Dettaglio
                </h1>
            </div>
            <div class="col-8 col-md-3 justify-content-center d-flex">
                <div class = "card">
                    <img src='{{Storage::url($project->img)}}' alt="Image tattoo">
                    <div class="card-content">
                        <h2 class="textWhite">
                            {{$project->title}}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-4">
                {{$project->description}}
            </div>
        </div>
    </div>
</x-layout>