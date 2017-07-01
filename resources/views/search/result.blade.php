@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp搜索结果</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="events-list">
                        <tr>
                            <td>
                                <div class="event-date">
                                    <div class="event-day">序号</div>
                                    <div class="event-month">种类</div>

                                </div>
                            </td>
                            <td name="title" id="title">
                                书名
                            </td>
                            <td class="event-venue hidden-xs" name="author" id="author"><i class="icon-map-marker"></i> 作者</td>
                            <td class="event-price hidden-xs" name="price" id="price">价格</td>
                            <td>详细信息</td>
                        <?php $num = 0; ?>
                        @foreach($books->all() as $book)
                            <?php $num++;?>
                            <tr>
                                <td>
                                    <div class="event-date">
                                        <div class="event-day">{{ $num }}</div>
                                        <div class="event-month">{{ $book->kind }}</div>

                                    </div>
                                </td>
                                <td name="title" id="title">
                                    {{$book->name}}
                                </td>
                                <td class="event-venue hidden-xs" name="author" id="author"><i class="icon-map-marker"></i> {{ $book->author }}</td>
                                <td class="event-price hidden-xs" name="price" id="price">{{ $book->price }}</td>
                                <td><a href="{{ url('/book_detail/'.$book->id) }}" class="btn btn-grey btn-sm event-more">详细信息</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @for($i = 0; $i < 5 - $num; $i++)
        <div style="width:100%;height:90px;"></div>
    @endfor

@endsection