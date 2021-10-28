@extends("layouts.layout")
@if($editBlog == true)

@elseif($deleteBlog == true)

@else
@section("content")
    <form action="@routeByName(editBlog)" method="post">
        <div class="input-group flex-nowrap">
            <input required type="text" class="form-control" placeholder="Blog name" aria-label="BlogName"
                   aria-describedby="addon-wrapping" value="{{$data["blogName"]}}" name="blogName">
        </div>
        <div class="input-group">
            <textarea required class="form-control" aria-label="With textarea" style="height: 400px " name="blog">{!! $data["blog"] !!}</textarea>
        </div>
@endsection
@section("sidebar")
        <div class="btn-group-vertical">
            <button type="submit" name="edit" class="btn btn-dark" value="{{$data["id"]}}">Edit blog</button>
            <button type="submit" name="delete" class="btn btn-dark" value="{{$data["id"]}}">Delete blog</button>
        </div>
    </form>
@endsection
@endif
