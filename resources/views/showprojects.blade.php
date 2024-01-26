<x-layout>
    <div class="container vh-100 mt-5 pt-5">
        <div class="row">
            <div class="col-12 mt-3 ">
                <h1 class="text-center">
                    Nel Dettaglio
                </h1>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12 col-md-7">
                    <div class = "cardshow">
                        <img src='{{Storage::url($project->img)}}' alt="Image tattoo">
                        <div class="card-content">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <h2 class="textDark text-center mb-3 fs-2">
                        {{$project->title}}
                    </h2>
                    <p class=" textdark">
                        {{$project->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>