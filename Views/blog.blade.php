@extends("layouts.layout")
@section("content")
    @if(!empty($data))
        <div class="container">
    <h1>
        {{$data["blogName"]}}
    </h1>
    <p>
        {!!$data["blog"]!!}
    </p>
        </div>
    @else
        <h1>
            Sorry, something wrong
        </h1>
    @endif
@endsection
@section("sidebar")
    <div class="btn-group-vertical">
        <form action="@routeByName(blogEdit)" method="get">
            <button type="submit" value="{{$data["id"]}}" name="id" class="btn btn-dark">Edit blog</button>
        </form>
    </div>
@endsection