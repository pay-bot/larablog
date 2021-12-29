@extends("layouts.frontend")

@section("content")
<main role="main">
  
  <section class="jumbotron text-center">
    <div class="container">
      <h1>Sistem Pakar</h1>
      <p class="lead text-muted">Aplikasi Deteksi Kerusakan Pada Printer berbasia web Dengan Menggunakan Metode Forward Chaining</p>
      
      {{-- <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p> --}}
      <!-- Button trigger modal -->
      <img class="img-fluid" src="{{ URL::to('/assets/img/print.png') }}">
<button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#exampleModal">
  Daftar Kelompok
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kelompok 5</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="">1.Nur Aini (201843500540) - Pencari Referensi</h3>
        <h3 class="">2.Reza Saputra (201843500681) - Pencari Referensi</h3>
        <h3 class="">3.Asep Gunawan (201843500116) - Pembuat Slide</h3>
        <h3 class="">4.Agung Surya L (201843500439) - Pembuat Slide</h3>
        <h3 class="">5.Ilham Nur Fikri (201843500073) - Content Creator</h3>
        <h3 class="">6.Fahri Alpiansyah (201843500885) - Pembuat Program</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">
      
      {{-- <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <a href="{{ route('post.show', $post->slug) }}" class="">
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="" width="348px" height="225px" style="object-fit: cover;">
            </a>
            <div class="card-body">
              <p class="card-text">{{ $post->description }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>   
        @endforeach
        
        
      </div> --}}
    </div>
  </div>
  
</main>
@endsection