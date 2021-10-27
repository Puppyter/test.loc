@extends("layouts.layout")
@section("content")
    <form action="@routeByName(blogEdit)" method="post">
        <div class="input-group flex-nowrap">
            <input required type="text" class="form-control" placeholder="Blog name" aria-label="BlogName"
                   aria-describedby="addon-wrapping" value="{{$blogName}}" name="blogName">
        </div>
        <div class="input-group">
            <textarea required class="form-control" aria-label="Blog" name="blog">{!! $blog !!}</textarea>
        </div>
        <input type="submit" name="add" value="Edit Blog">
    </form>
@endsection
@section("sidebar")

@endsection
