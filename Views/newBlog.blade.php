@extends("layouts.layout")
@section("content")
    <form action="@routeByName(blogNew)" method="post">
        <div class="input-group flex-nowrap">
            <input required type="text" class="form-control" placeholder="Blog name" aria-label="BlogName"
                   aria-describedby="addon-wrapping" name="blogName">
        </div>
        <div class="input-group">
            <textarea required class="form-control" aria-label="Blog" name="blog"></textarea>
        </div>
        <input type="submit" name="add" value="Add Blog">
    </form>
@endsection
@section("sidebar")

@endsection
