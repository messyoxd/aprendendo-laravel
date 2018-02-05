<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    @yield('title')

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>

    @include('partials.nav')

    <br>

    {{-- <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Featured post</a>
            </h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">
              <a class="text-dark" href="#">Post title</a>
            </h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
        </div>
      </div>
    </div> --}}

    <div class='container'>
        <div class="row">
          <div class="col-md-8 blog-main">
              @yield('content')
          </div>
          @include('partials.sidebar')
        </div>

    </div>

    @include('partials.footer')

  </body>
</html>
