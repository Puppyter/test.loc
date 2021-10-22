@extends("layouts.layout")

@section("content")
    @forelse($data as $page)
        @foreach($page as $blogs)
        <div class="card" style="width: 18rem;">
            <h5 class="card-title">
                {{$blogs["blogName"]}}
            </h5>
            <form action="/index.php/blog" method="get">
                 <input placeholder="Visit blog" type="submit" name="id" class="btn btn-primary"  value="{{$blogs["id"]}}" >
            </form><span>
            <form action="/index.php/blog/edit" method="get">
                    <input placeholder="Edit blog" type="submit" name="id" class="btn btn-primary"  value="{{$blogs["id"]}}" >
            </form></span>
        </div>
        @endforeach
    @empty
        <h1>No posts yet</h1>
    @endforelse
@endsection

@section("sidebar")
    <a href="/index.php/blog/new" class="btn btn-primary">Add new blog</a>
@endsection

