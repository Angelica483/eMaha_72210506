<div>
<div class="card container">
    @foreach ($art as $a)
        <div class="card border-primary">
        <div class="card-header bg-primary text-light justify-content-center">
    <strong>Artikel Terbaru</strong>
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $a->judul }}</h5>
    <p class="card-text">{{ $a->deskripsi }}</p>
   
  </div>
  @endforeach
</div>
