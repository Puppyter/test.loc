<!doctype html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>test.loc</title>
</head>
<body>
<div class="container">
    @section("upper")
    <div class="row">
        <div class="col">col</div>
        <div class="col">col</div>
        <div class="col">col</div>
        <div class="col">col</div>
    </div>
    @show
    <div class="row">
        @yield("content")
        @section("sidebar")
        <div class="col-4">col-4</div>
        @show
    </div>
</div>
</body>