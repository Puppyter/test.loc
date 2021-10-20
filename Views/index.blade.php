@extends("layouts.layout")

@section("content")
    @forelse($data as $dates)
        <div class="card" style="width: 18rem;">
            <h5 class="card-title">
                {{$dates["blogname"]}}
            </h5>
            <form action="/index.php/blog" method="get">
                 <input placeholder="Visit blog" type="submit" name="id" class="btn btn-primary"  value="{{$dates["id"]}}" >
            </form><span>
            <form action="/index.php/blog/edit" method="get">
                    <input placeholder="Edit blog" type="submit" name="id" class="btn btn-primary"  value="{{$dates["id"]}}" >
            </form></span>
        </div>
    @empty
        <h1>No posts yet</h1>
    @endforelse
@endsection

@section("sidebar")
    <a href="/index.php/blog/new" class="btn btn-primary">Add new blog</a>
@endsection

