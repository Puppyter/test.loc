@extends("layouts.layout")
@section("content")
    @if(!empty($data))
        <div>
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