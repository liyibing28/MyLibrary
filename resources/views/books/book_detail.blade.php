@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp图书详情</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Product Image & Available Colors -->
                <div class="col-sm-6">
                    <div class="product-image-large">
                        <img src="{{ '/img/books/'.$book->image }}" height="350" width="200" alt="Item Name">
                    </div>
                    <div class="colors">

                    </div>
                </div>
                <!-- End Product Image & Available Colors -->
                <!-- Product Summary & Options -->
                <div class="col-sm-6 product-details">
                    <h4>{{ $book->name }}</h4>
                    <!-- <div class="price">
                         jim Grofu
                    </div> -->

                    <table class="shop-item-selections">
                        <!-- Color Selector -->

                        <tr>
                            <td><b>作者:</b></td>
                            <td>

                                {{ $book->author }}

                            </td>
                        </tr>
                        <tr>
                            <td><b>ISBN:</b></td>
                            <td>

                                {{ $book->ISBN }}

                            </td>
                        </tr>
                        <tr>
                            <td><b>价格:</b></td>
                            <td>

                                {{ $book->price }}

                            </td>
                        </tr>

                        <!-- Size Selector -->
                        <tr>
                            <td><b>位置:</b></td>
                            <td>
                                {{ $book->location }}
                            </td>
                        </tr>
                        <!-- Quantity -->
                        <tr>
                            <td><b>剩余可借：</b></td>
                            <td>
                                {{ $book->repertory - $book->borrowed_num }}
                            </td>
                        </tr>
                        <!-- Add to Cart Button -->
                        <tr>
                            <td>&nbsp;</td>
                            <td>

                            </td>
                        </tr>
                    </table>

                    <h5>简介</h5>
                    <p>
                        {{ $book->intro }}
                    </p>
                </div>
                <!-- End Product Summary & Options -->


            </div>
        </div>
    </div>
@endsection