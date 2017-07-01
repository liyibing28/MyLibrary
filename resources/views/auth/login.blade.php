@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp登录</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="basic-login">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('account') ? ' has-error' : '' }}">
                                <label for="account"><i class="icon-user"></i> <b>账号</b></label>
                                <input class="form-control" id="account" name="account" type="text" placeholder="">
                                @if ($errors->has('account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password"><i class="icon-lock"></i> <b>密码</b></label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn pull-right">登录</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-7 social-login">
                    <p style="font-size: 1.5em;font-weight: 600;font-style: normal;">
                        外物之味,久则可厌
                        <br>
                        <br>
                        读书之味,愈久愈深
                    </p>
                    <br>
                    <br>
                    <div class="not-member">
                        <p>还没有注册？ <a href="{{ url('/register') }}">点击这里注册</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection