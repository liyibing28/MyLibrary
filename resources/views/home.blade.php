@extends('layouts.app')

@section('content')
    <form role="form" method="POST" action="{{ url('/result') }}">
        {{ csrf_field() }}
        <div class="input-group">
            <input class="form-control input-md" id="keyword" name="keyword" type="text">
            <span class="input-group-btn">
                                <button class="btn btn-md">Search</button>
                            </span>

        </div>
        <br>
        <input type="radio" name="category" value="今日话题" />&nbsp 按照书名 &nbsp
        <input type="radio" name="category" value="今日话题" />&nbsp 按照作者名 &nbsp
        <input type="radio" name="category" value="今日话题" />&nbsp 按照关键字

    </form>
@endsection
