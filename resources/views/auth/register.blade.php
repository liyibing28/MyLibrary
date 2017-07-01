@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp注册</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section" >
        <div class="container">
            <div class="row" >
                <div class="col-sm-5" style="margin-left:350px" >
                    <div class="basic-login" >
                        <form role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('account') ? ' has-error' : '' }}">
                                <label for="register-username"><i class="icon-user"></i> <b>账号</b></label>
                                <input class="form-control" id="account" name="account" type="text" placeholder="">
                                @if ($errors->has('account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="register-password"><i class="icon-lock"></i> <b>密码</b></label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="register-password2"><i class="icon-lock"></i> <b>确认密码</b></label>
                                <input class="form-control" id="password-confirm" name="password_confirmation" type="password" placeholder="">
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="register-username"><i class="icon-user"></i> <b>邮箱</b></label>
                                <input class="form-control" id="email" name="email" type="text" placeholder="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="register-password"><i class="icon-lock"></i> <b>姓名</b></label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
                                <label for="register-username"><i class="icon-user"></i> <b>班级</b></label>
                                <input class="form-control" id="class" name="class" type="text" placeholder="">
                                @if ($errors->has('class'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('class') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group" >
                                <label for="register-password"><i class="icon-lock"></i> <b>专业</b></label>
                                <br>
                                <select name="speciality" class="form-control">
                                    <option  value="管理学院">管理学院</option>
                                    <option value="数学院">数学院</option>
                                    <option value="计算机学院" selected="selected">计算机学院</option>
                                    <option value="物理学院">物理学院</option>
                                    <option value="经济学院">经济学院</option>
                                    <option value="电子学院">电子学院</option>
                                    <option value="外国语学院">外国语学院</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="sex"><i class="icon-lock"></i> <b>性别</b></label>
                                <br>
                                <select name="sex" class="form-control">
                                    <option value="1">男</option>
                                    <option value="0">女</option>
                                </select>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="register-username"><i class="icon-user"></i> <b>手机</b></label>
                                <input class="form-control" id="phone" name="phone" type="text" placeholder="">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn pull-right">注册</button>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection