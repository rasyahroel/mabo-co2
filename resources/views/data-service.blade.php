@extends('app')

@section('content')
<div class="container-fluid d-flex" background="image/bg(1).jpg" style="background-size: contain; background-repeat: round;">
    <div class="mb-5 col-8 ms-5 justify-content">
        <div class="my-5 row">
            <h1 class="col-md-9 col-sm-12">List <span class="text-yellow">Service</span></h1>
            <div class="dropdown col-md-3 col-sm-12">
                <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Filter Tampilan
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Paling baru</a></li>
                    <li><a class="dropdown-item" href="#">Paling lama</a></li>
                    <li><a class="dropdown-item" href="#">Progres</a></li>
                    <li><a class="dropdown-item" href="#">Complete</a></li>
                </ul>
            </div>
        </div>
        <div>
            <date>
                <h3 class="my-5">Senin, 01 Januari 2020</h3>
            </date>
            <div>
                <ul class="list pe-4">
                    <li class="p-4 my-3 bg-yellowalt">
                        <h4><a href="#" class="text-dark">Judul service</a></h4>
                        <p>Progres</p>
                        <h5>Desipsi</h5>
                        <p class="ms-4">Ini berisi deskripsi singkat tentang service yang dilakukan maximal 20 kata <a class="text-dark" href="#"><strong>Lihat detail...</strong></a></p>
                    </li>
                    <li class="p-4 my-3 bg-yellowalt">
                        <h4><a href="#" class="text-dark">Judul service</a></h4>
                        <p>Progres</p>
                        <h5>Desipsi</h5>
                        <p class="ms-4">Ini berisi deskripsi singkat tentang service yang dilakukan maximal 20 kata <a class="text-dark" href="#"><strong>Lihat detail...</strong></a></p>
                    </li>
                    <li class="p-4 my-3 bg-yellowalt">
                        <h4><a href="#" class="text-dark">Judul service</a></h4>
                        <p>Progres</p>
                        <h5>Desipsi</h5>
                        <p class="ms-4">Ini berisi deskripsi singkat tentang service yang dilakukan maximal 20 kata <a class="text-dark" href="#"><strong>Lihat detail...</strong></a></p>
                    </li>
                </ul>
            </div>
            <date>
                <h3 class="my-5">Senin, 01 Januari 2020</h3>
            </date>
            <div>
                <ul class="list-service pe-4">
                    <li class="p-4 my-3 bg-yellowalt">
                        <h4><a href="#" class="text-dark">Judul service</a></h4>
                        <p>Progres</p>
                        <h5>Desipsi</h5>
                        <p class="ms-4">Ini berisi deskripsi singkat tentang service yang dilakukan maximal 20 kata <a class="text-dark" href="#"><strong>Lihat detail...</strong></a></p>
                    </li>
                    <li class="p-4 my-3 bg-yellowalt">
                        <h4><a href="#" class="text-dark">Judul service</a></h4>
                        <p>Progres</p>
                        <h5>Desipsi</h5>
                        <p class="ms-4">Ini berisi deskripsi singkat tentang service yang dilakukan maximal 20 kata <a class="text-dark" href="#"><strong>Lihat detail...</strong></a></p>
                    </li>
                    <li class="p-4 my-3 bg-yellowalt">
                        <h4><a href="#" class="text-dark">Judul service</a></h4>
                        <p>Progres</p>
                        <h5>Desipsi</h5>
                        <p class="mb-5">Ini berisi deskripsi singkat tentang service yang dilakukan maximal 20 kata <a class="text-dark" href="#"><strong>Lihat detail...</strong></a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

