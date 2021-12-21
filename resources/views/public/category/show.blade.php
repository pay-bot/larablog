@extends("layouts.frontend")

@section("content")
<main role="main">
  
  <section class="jumbotron text-center">
    <div class="container">
      <h1>Sistem Pakar</h1>
      <p class="lead text-muted">Aplikasi Sistem Pakar Deteksi Kerusakan Pada Printer berbasia web Dengan Menggunakan Metode Forward Chaining</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">
      
      <div class="row">
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
        
        
      </div>
    </div>
  </div>
  
</main>
@endsection