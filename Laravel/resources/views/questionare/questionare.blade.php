@extends('layouts.app')

@section('content')


<!Kártyák>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title">kérdés 1</h5>

        <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">elso</button>
  <button type="button" class="btn btn-primary">masodik</button>
  <button type="button" class="btn btn-primary">harmadik</button>
</div>

        <p class="card-text">melyik jellemző önre</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title">kérdés 2</h5>
        <ul class="list-group">
  <li class="list-group-item active" aria-current="true">Mit szeretenél?</li>
  <li class="list-group-item">elso</li>
  <li class="list-group-item">masodik</li>
  <li class="list-group-item">harmadik</li>
  <li class="list-group-item">negyedik</li>
</ul>
        <p class="card-text">válaszon ki 1 et a listából</p>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><--ide mehet 1 kép</h5>
        <p class="card-text"></p>
        <p class="card-text"><small class="text-muted">csak pozitív válasz elfogadható</small></p>
      </div>
    </div>
  </div>
</div>

  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">   ^</h5>
        <h5 class="card-title">   |</h5>
        <h5 class="card-title">   |</h5>
        <h5 class="card-title">vagy ide egy kép?</h5>
        <p class="card-text">meg leírás</p>
      </div>
    </div>
  </div>
</div>

<! oldal >
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

@endsection