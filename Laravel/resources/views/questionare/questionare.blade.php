@extends('layouts.app')

@section('content')
 <!--Main Navigation-->
 <header>
    <style>
      #intro {
        background-image: url("hatter.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank">
          <strong>ES</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#intro">Laravel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#intro">Log Out</a>
            </li>
          </ul>


         
         
          <!-- Navbar brand -->

          <ul class="navbar-nav d-flex flex-row">
            
       
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <!-- BEJELNETKEZÉST IDE -->

        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/slides/031.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Rólunk</strong></h4>
            <p class="text-muted">
             Ide mehet egy kis szöveg rólunk a weblapról kábítószer beszerzési útmutató ilyek
            </p>
            <p><strong>Kérdőívekről</strong></p>
            <p class="text-muted">
             blalalbalamblablabablbalblabla a kérdőívekről
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="mb-5">
        <h4 class="mb-5 text-center"><strong>Regisztráció</strong></h4>

        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <form>
            
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4" >
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>


            
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Regisztrálás
              </button>
    </form>


 <!-- Kártya-->


<div class=" row justify-content-center">

<div class="card text-white bg-dark mb-3" style="max-width: 18rem;" >
  <div class="card-header">1.</div>
  <div class="card-body">
    <h5 class="card-title">kérdése</h5>
    <p class="card-text"><div class="btn-group-vertical" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Left</button>
  <button type="button" class="btn btn-primary">Middle</button>
  <button type="button" class="btn btn-primary">Right</button>
</div>
</p>
  </div>
</div>
</div>

<div class=" row justify-content-center">



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