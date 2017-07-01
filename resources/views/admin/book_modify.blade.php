@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp图书信息管理</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div style="width:100%;height:150px;"></div>
    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-sm-5" style="margin-left:300px;">
                    <!-- Contact Form -->

                    <div class="contact-form-wrapper">
                        <br>
                        <br>
                        <form class="form-horizontal" role="form" method="post" action="{{ url('/book/book_modify_detail') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('modify_book') ? ' has-error' : '' }}">
                                <label for="modify_book" class="col-sm-3 control-label"><b>图书ISBN</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="modify_book" name="modify_book" type="text">
                                    @if ($errors->has('modify_book'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('modify_book') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn pull-right">确定</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Info -->
                </div>
            </div>
        </div>
    </div>
    <div style="width:100%;height:150px;"></div>
@endsection