@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp用户借书</h1>
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
                        <form class="form-horizontal" role="form" method="post" action="{{ url('/admin/borrow') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('student_account') ? ' has-error' : '' }}">
                                <label for="student_account" class="col-sm-3 control-label"><b>学生账号</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="student_account" name="student_account" type="text">
                                    @if ($errors->has('student_account'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('student_account') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('book_isbn') ? ' has-error' : '' }}">
                                <label for="book_isbn" class="col-sm-3 control-label"><b>书本ISBN编号</b></label>
                                <div class="col-sm-9">
                                    <input class="form-control" id="book_isbn" name="book_isbn" type="text">
                                    @if ($errors->has('book_isbn'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('book_isbn') }}</strong>
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