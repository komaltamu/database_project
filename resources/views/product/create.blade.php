<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

</head>
<body>
  
      <!-- <nav class="aa navbar navbar-expand-lg bg-body-tertiary " > -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong ">
        <div class=" container-fluid">
          <a class="t navbar-brand" href="{{route('home')}}">INVENTORY MANAGEMENT SYSTEM</a>
          <button class="me navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
              <li class=" nav-item">
                <a class="t nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="t nav-link" href="#">Link</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="t nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Modules
                </a>
                 <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('er')}}">E/R Diagram</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('ct')}}">Relational Schema</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('sc')}}">SQL Code</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('pyt')}}">Python Code</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('index')}}">SQL & DB</a></li>
                            <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="pdp.html">PERL Database Programming</a></li> -->
                        </ul>
              </li>
              
            </ul>
         
          </div>
        </div>
      </nav>
    @if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
    @endif

    @if(Session::has('failure'))
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('failure') }}</p>
    @endif

     <form action="{{route('save')}}" method="post">
        @csrf
        <div>
            <input type="text" name="name" value="{{ old('name') }}" id="datepicker" placeholder="Product Name" />
            @error('name')
                <span
                    class="form-text text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="text" name="price" value="{{ old('price') }}" id="datepicker" placeholder="Product Price" />
            @error('price')
                <span
                    class="form-text text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div>

            <input type="text" name="quantity" value="{{ old('quantity') }}" id="datepicker" placeholder="Product Quantity" />
            @error('quantity')
                <span
                    class="form-text text-danger">{{ $message }}</span>
            @enderror
        </div>
            <input type="submit" value="submit">
    </form>
    
</body>

</html>


