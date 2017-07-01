@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp学生信息</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="job-details-wrapper">
                        <h3>个人信息</h3>
                        @if(Auth::user()->sex)
                            <img src="/head/boy.jpg">
                        @else
                            <img src="/head/girl.jpg">
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>基本信息：</h4>
                    <ul>
                        <li>姓名：{{ Auth::user()->name }}</li>
                        <li>性别：{{ Auth::user()->sex ? '男' : '女' }}</li>
                        <li>专业：{{ Auth::user()->speciality }}</li>
                        <li>班级：{{ Auth::user()->class }}</li>
                    </ul>
                    <h4>怎么联系到我：</h4>
                    <ul>
                        <li>手机：{{ Auth::user()->phone }}</li>
                        <li>邮箱：{{ Auth::user()->email }}</li>
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="col-md-3 col-md-offset-1">
                    <h4>你可能想要...</h4>
                    <table class="jobs-list">
                        <tr>
                            <td class="job-position">
                                <a href="#">修改信息</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="job-position">
                                <a href="#">修改密码</a>
                            </td>
                        </tr>

                    </table>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>正在借阅</h2>
            <div class="row">
                <div class="col-md-8">
                    <table class="jobs-list">
                        <tr>
                            <th>书名</th>
                            <th>借阅日期</th>
                            <th>应还日期</th>
                        </tr>

                        @foreach($borrow_books as $borrow_book)
                            <tr>
                                <td class="job-position">
                                    <a href="#">{{ $borrow_book['name'] }}</a>
                                </td>
                                <td class="job-location">
                                    <div class="job-country">{{ $borrow_book['borrow_date'] }}</div>
                                </td>
                                <td class="job-type hidden-phone">{{ $borrow_book['deadline'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4 col-sm-6">
                    <div class="join-us-promo">
                        <!-- Quote -->
                        <div class="join-us-bubble">
                            <blockquote>
                                <p class="quote">
                                    @if($expire_num == 0)
                                        你没有超期的书
                                    @else
                                        你有{{ $expire_num }}本书超期了哦
                                    @endif
                                </p>
                                <cite class="author-info">

                                </cite>
                            </blockquote>
                            <div class="sprite arrow-speech-bubble"></div>
                        </div>
                        <!-- Team Member Photo -->
                        <div class="author-photo">

                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
@endsection