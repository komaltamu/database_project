<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong ">
        <div class=" container-fluid">
            <a class="t navbar-brand" href="{{route('home')}}">INVENTORY MANAGEMENT SYSTEM</a>
            <button class="me navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="t nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
    <h2 class="he3">E/R DIAGRAM:</h2>
    <img class="pic_3" src="{{ URL::asset('assets/img/pic3.png') }}" alt="">
    <h3 class="he4">DESCRIPTION:</h3>
    <h5 class="he5">BACKGROUND:</h5>
    <p class="p3">The earliest form of inventory management can be traced back
        to the ancient Egyptians who kept track of their grain reserves
        to prevent food shortages. Today, inventory management has
        become an essential part of modern business operations. In the
        early days, inventory management was often done manually,
        but now there are various software tools available that make
        inventory management easier.
    </p>
    <h5 class="he5">PROBLEM STATEMENT:</h5>
    <p class="p3">The problems that companies face without inventory
        management include overstocking or understocking, lack of
        real-time information, difficulty in forecasting demand, poor
        communication among departments, and poor visibility into the
        supply chain.</p>
    <h5 class="he5">AIMS & OBJECTIVES:</h5>
    <p class="p3">The primary aim of an inventory management system is to
        optimize inventory levels, reduce costs, and improve customer
        satisfaction. The objectives of an inventory management system
        include maintaining the right level of inventory, reducing
        stockouts and overstocking, improving visibility into the supply
        chain, and increasing efficiency in the order fulfillment process.</p>
    <h5 class="he5">SCOPE:</h5>
    <p class="p3">The scope of inventory management systems includes tracking
        the movement of inventory, maintaining accurate inventory
        records, managing order fulfillment, and optimizing inventory
        levels. An effective inventory management system can help
        businesses reduce carrying costs, improve cash flow, and
        increase profitability. Inventory management is particularly
        important for businesses that operate in industries with high
        levels of competition or those that deal with perishable or
        seasonal products.</p>
</body>

</html>
