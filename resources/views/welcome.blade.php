<x-layout>
    <header class="container-fluid vh-100 ">
        @if (session()->has('message'))
                    <h2 class="col-12 alert textDark text-center mt-5 pt-5" id="message">
                        {{ session('message') }}
                    </h2>
                @endif
        <div class="row h-100"> 
            <div class="col-12 d-flex align-items-center justify-content-center header">
                <h1 class="display-1 textWhite" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    Tattoo-Studio
                </h1>
            </div>
                
        </div>
    </header>
    <main class="container vh-100 mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-3">
                    I miei ultimi lavori
                </h2>
            </div>
            @foreach ($projects as $project)
            <div class="col-12 col-md-3 justify-content-center d-flex">
                <a href="{{route('showproject', compact('project'))}}" class="button textWhite">
                    <div class = "card">
                        <img src='{{Storage::url($project->img)}}' alt="Image tattoo">
                        <div class="card-content">
                            <h2 class="textWhite">
                                {{$project->title}}
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </main>
</x-layout>