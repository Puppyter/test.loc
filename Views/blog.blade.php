@extends("layouts.layout")
@section("content")
    <form name="newBlog" method="post" action="index.php">
    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Blog name" aria-label="BlogName" aria-describedby="addon-wrapping" name="blogname">
    </div>
    <div class="input-group">
        <textarea class="form-control" aria-label="Blog" name="blog"></textarea>
    </div>
        <input type="submit" name="editing" value="Edit">
    </form>
@endsection
@section("sidebar")

@endsection