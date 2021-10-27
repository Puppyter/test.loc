@extends("layouts.layout")

@section("content")
    <div class="card bg-dark text-white">
        <img src="" class="card-img">
        <div class="card-img-overlay">
            <h5 class="card-title">{{$data[["blogName"]]}}</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">Last updated 3 mins ago</p>
        </div>
    </div>
    <div class="row row-cols-3">

    @forelse($data as $key=>$blogs)
            <div class="col-">
                <div class="card">
                    <h5 class="card-title">
                        {{$blogs["blogName"]}}
                    </h5>
                    <p class="card-text">
                        {!!substr($blogs["blog"], 0, 25)!!}
                    </p>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <form action="@routeByName(blog)" method="get">

                        <button type="submit" name="id" class="btn btn-dark"
                                value="{{$blogs["id"]}}">Continue riding
                        </button>

                </form>
                    <span>
{{--            <form  action="@routeByName(blogEdit)" method="get">--}}
{{--                    <button type="submit" name="id" class="btn btn-dark"--}}
{{--                            value="{{$blogs["id"]}}">Edit</button>--}}
{{--            </form>--}}
            </span>
                    </div>
                </div>
            </div>
    @empty
        <h1>No posts yet</h1>
    @endforelse
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        @foreach($pages as $key)

            <span>
                 <form action="@routeByName(index)" method="post">
                     <input type="submit" name="page" class="btn btn-dark" value="{{$key}}">
                 </form>
            </span>
        @endforeach
    </div>

@endsection

@section("sidebar")
    <a href="/blog/new" class="btn btn-dark">Add new blog</a>
@endsection

