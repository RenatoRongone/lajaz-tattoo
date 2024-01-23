<x-layout>
    <div class="container mt-5 pt-5">
        <div class="row my-5 justify-content-center ">
            <div class="col-12">
                <h1 class="text-center">
                    I Miei Lavori
                </h1>
            </div>
            @foreach ($projects as $project)
            <div class="col-12 col-md-3 justify-content-center d-flex my-2">
                <div class = "card">
                    <img src='{{Storage::url($project->img)}}' alt="Image tattoo">
                    <div class="card-content">
                        <h2 class="textWhite">
                            {{$project->title}}
                        </h2>
                    </div>
                    <a href="#" class="button textWhite">
                    </a>
                </div>
            </div>
            @endforeach
            <div class="col-12 d-flex justify-content-center mt-5">
                {{$projects->links()}}
            </div>
        </div>
    </div>
</x-layout>