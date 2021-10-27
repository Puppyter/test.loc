<!doctype html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>test.loc</title>
</head>
<body>
<div class="container" >
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
                <a href="@routeByName(index)"  style="color: antiquewhite">HOME</a>
            </div>
            <div class="col col-lg-2">col</div>
            <div class="col col-lg-2">col</div>
            <div class="col col-lg-2">col</div>
        </div>
    @show
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