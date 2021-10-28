<!doctype html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>test.loc</title>
</head>
<body>
    @section("head")
        <div style="background: black">

            <div class="row justify-content-md-center" >
                <div class="col-md-auto">
                    <a href="@routeByName(index)" class="navbar-brand" style="color: aliceblue">TEST.LOC</a>
                </div>
            </div>
        </div>

    @show
    @section("upper")
        <div class="row justify-content-md-center" style="background: gray">
            <div class="col col-lg-2">
                <a href="@routeByName(index)"  style="color: antiquewhite"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg></a>
            </div>
            <div class="col col-lg-2">
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Small button
                    </button>
                    <ul class="dropdown-menu">
                        <li>asdaad</li>
                        <li>fdsagsdf</li>
                    </ul>
                </div>

            </div>
            <div class="col col-lg-2">col</div>
            <div class="col col-lg-2"><a href="@routeByName(userLogin)" style="color: antiquewhite"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                    </svg></a></div>
        </div>
    @show
    <div class="container" style="margin-top: 1em">
    <div class="row">
        <div class="col-8">
        @yield("content")
        </div>
            <div class="col-4">
                @section("sidebar")
                    col-4
                @show
            </div>
    </div>
    </div>

</body>