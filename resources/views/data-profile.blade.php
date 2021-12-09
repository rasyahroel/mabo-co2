@extends('app')

@section('content')
<div class="container-fluid d-flex">
    <div class="col-md-9 col-sm-10">
       <div class="d-flex">
         <h1 class="m-5 col-8">Profil</h1>
       </div>
        
        <div class="mx-5">
            <div class="d-flex">
               <p class="col-3">Nama</p><p>: Nama lengkap user</p>
            </div>
            <div class="d-flex">
               <p class="col-3">Tempat, Tanggal Lahir</p><p>: Tempat dan Tanggal lahir user (ex : Pariaman, 01 Januari 2000) </p>
            </div>
            <div class="d-flex">
               <p class="col-3">Jenis Kelamin</p><p>: Gender user (Perempuan/Laki-laki</p>
            </div>
            <div class="d-flex">
               <p class="col-3">Alamat</p><p>: Alamat lengkap user</p>
            </div>
            <div class="d-flex">
               <p class="col-3">Email</p><p>: Email user yang aktif</p>
            </div>
            <div class="d-flex">
               <p class="col-3">No.HP</p><p>: No Handphone user yang aktif</p>
            </div>
            <div class="d-flex">
               <p class="col-3">Jumlah service</p><p>: Jumlah service yang sudah di lakukan user baik masih progres atau yang complete</p>
            </div>
            <div class="pt-5 my-5 justify-content-md-end d-grid">
               <a class="text-dark" href="http://localhost/MA_BO/edit_profil.php"><button type="submit" class="btn bg-yellowalt" >Edit</button></a>
            </div>
        </div>
    </div>
</div>
@endsection