@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp图书查找</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-sm-4 blog-sidebar" style="margin-left:400px;">
                    <h4>Search our Library</h4>
                    <form role="form" method="POST" action="{{ url('/result') }}">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input class="form-control input-md" id="keyword" name="keyword" type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-md">Search</button>
                            </span>

                        </div>
                        <br>
                        <input type="radio" name="category" value="1" />&nbsp 按照书名 &nbsp
                        <input type="radio" name="category" value="2" />&nbsp 按照作者名 &nbsp
                        <input type="radio" name="category" value="3" />&nbsp 按照类别

                    </form>
                    <br>
                    <h4>热门借阅</h4>
                    <ul class="recent-posts">

                        @foreach($hot_books->all() as $hot_book)
                            <li><a href="{{ url('/book_detail/'.$hot_book->id) }}">{{ $hot_book->name }}</a></li>
                        @endforeach

                    </ul>

                </div>
                <!-- End Sidebar -->

            </div>
        </div>
    </div>
@endsection