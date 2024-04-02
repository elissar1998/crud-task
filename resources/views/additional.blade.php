<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous"
    >
  </head>
  <body>
    {{dd($a)}}
    @php
       echo "kkkkkkkkkkkkkk";

    @endphp
    <p>Helllo</p>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD LARAVEL</a>
          <button class="navbar-toggler"
           type="button"
           data-bs-toggle="collapse"
           data-bs-target="#navbarNav"
           aria-controls="navbarNav"
           aria-expanded="false"
           aria-label="Toggle navigation"
          >
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"
               id="navbarNav"
          >
            <ul class="navbar-nav d-flex justify-content-end " >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Show User</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}

       {{-- @dd($allUsers) --}}
       {{-- {{ isset($U) ? $U : 'no' }} --}}
       {{-- {!! $U!!} --}}
      {{-- <table class="table table-bordered mx-auto w-100">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody> --}}
            {{-- @foreach($allUsers as $user)
          <tr>
            <th scope="row">{{$user['id']}}</th>
            <td>{{$user['FirstName']}}</td>
            <td>{{$user['LastName']}}</td>
            <td>{{$user['BirthDay']}}</td>
            <td>
                <a href="#" class="btn btn-info">View</a>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach --}}
          {{-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>@twitter</td>
            <td>@mdo</td>
            <td>
                <a href="#" class="btn btn-info">View</a>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
    </script>
  </body>
</html>
