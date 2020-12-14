@extends('layouts.app')
{{--Extent phần yield content ben app.blade --}}
{{--Phân section sẽ đc copy sang phần yield content--}}
@section('content')
<h1>Danh sach bai viet</h1>

@foreach($articles as $article)
    <div>
        {{$article->title}}e
    </div>
@endforeach

<div>
    {{--dùng để tạp ra link của phần phân trang--}}
    {{$articles->links()}}
</div>


