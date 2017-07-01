@section('content')
    <div class="section" >
        <div class="container">
            <div class="row" >
                <div class="col-sm-5" style="margin-left:350px" >
                    <div class="basic-login" >
                        <form  enctype="multipart/form-data" role="form" method="POST" name="uploadform" action="{{ url('/book/book_modify') }}">
                            {{ csrf_field() }}

                            @if($errors->has('success'))
                                <span>
                                    <strong>{{ $errors->first('success') }}</strong>
                                </span>
                            @endif

                            <div class="form-group">
                                <label for="title"><i class="icon-user"></i><b>编辑书本信息</b></label>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name"><i class="icon-user"></i> <b>书名</b></label>
                                <input class="form-control" id="name" name="name" type="text">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                                <label for="isbn"><i class="icon-user"></i> <b>ISBN编号</b></label>
                                <input class="form-control" id="isbn" name="isbn" type="text">
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                                <label for="author"><i class="icon-user"></i> <b>作者</b></label>
                                <input class="form-control" id="author" name="author" type="text">
                                @if ($errors->has('author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('repertory') ? ' has-error' : '' }}">
                                <label for="repertory"><i class="icon-user"></i> <b>数量</b></label>
                                <input class="form-control" id="repertory" name="repertory" type="text">
                                @if ($errors->has('repertory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('repertory') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                <label for="location"><i class="icon-user"></i> <b>位置</b></label>
                                <input class="form-control" id="location" name="location" type="text">
                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price"><i class="icon-user"></i> <b>价格</b></label>
                                <input class="form-control" id="price" name="price" type="text">
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group" >
                                <label for="kind"><i class="icon-lock"></i> <b>种类</b></label>
                                <br>
                                <select name="kind" class="form-control">
                                    <option value="文学">文学</option>
                                    <option value="哲学">哲学</option>
                                    <option value="经济">经济</option>
                                    <option value="社会">社会</option>
                                    <option value="科学" selected="selected">科学</option>
                                    <option value="法律">法律</option>
                                    <option value="军事">军事</option>
                                    <option value="艺术">艺术</option>
                                </select>
                            </div>

                            <div class="form-group{{ $errors->has('intro') ? ' has-error' : '' }}">
                                <label for="intro"><i class="icon-lock"></i><b>简介</b></label>
                                <input class="form-control" id="intro" name="intro" type="text">
                                @if ($errors->has('intro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('intro') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="image">图片</label>
                                <input class="file" type="file" name="image">
                                @if($errors->has('picture_format'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture_format') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn pull-right">录入</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection