@extends("layouts.layout")

@section("content")
        @forelse($data as $key=>$blogs)
            <div class="col-">
                    <div class="card mb-3" style="max-width: 540px;">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{$blogs["blogName"]}}
                                        </h5>
                                        <p class="card-text"><small class="text-muted">{{$blogs["date"]}}</small></p>
                                        <p class="card-text">
                                            {!!$blogs["blog"]!!}
                                        </p>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <form action="@routeByName(blogEdit)" method="get">
                                                    <button type="submit" name="id" class="btn btn-dark" value="{{$blogs["id"]}}">Edit blog
                                                    </button>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                    </div>
            </div>
        @empty
            <h1>No posts yet</h1>
        @endforelse

    <form action="@routeByName(index)" method="post">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><button type="submit" name="page" class="btn btn-dark"  value="{{$currentPage-1}}">Previous</button></li>
                @foreach($pages as $key)
                            <input type="submit" name="page" class="btn btn-dark" value="{{$key}}">
                @endforeach
                <li class="page-item"><button type="submit" name="page" class="btn btn-dark" value="{{$currentPage+1}}">Next</button></li>
            </ul>
        </nav>
    </form>
@endsection

@section("sidebar")
    <a href="/blog/new" class="btn btn-dark">Add new blog</a>
@endsection

