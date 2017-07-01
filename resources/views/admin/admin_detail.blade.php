@extends('layouts.library')

@section('page_title')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <h1>&nbsp&nbsp&nbsp&nbsp&nbsp管理员信息</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="job-details-wrapper">
                        <h3>管理员宣誓</h3>
                        <p>
                            我自愿加入杭电图书馆。维护图书馆的秩序，保护图书的安全，增强学生的阅读兴趣，积极工作，勤奋刻苦，为杭电图书馆献出自己的青春和汗水！
                        </p>
                        <h4>基本信息：</h4>
                        <ul>
                            <li name="name">姓名：{{ Auth::user()->name }}</li>
                            <li name="sex">性别：{{ Auth::user()->sex ? '男' : '女' }}</li>
                            <li name="id">管理员号：{{ Auth::user()->account }}</li>
                        </ul>
                        <h4>怎么联系到我：</h4>
                        <ul>
                            <li name="phone">手机：{{ Auth::user()->phone }}</li>
                            <li name="eamil">邮箱：{{ Auth::user()->email }}</li>
                        </ul>

                    </div>
                    <!-- End Job Description -->
                </div>
                <!-- Sidebar -->
                <div class="col-md-4 col-md-offset-1">
                    <h4>管理员操作</h4>
                    <table class="jobs-list">
                        <tr>
                            <td class="job-position">
                                <a href="{{ url('/admin/borrow') }}">借书入口</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="job-position">
                                <a href="{{ url('admin/giveback') }}">还书入口</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="job-position">
                                <a href="{{ url('admin/create') }}">增加图书</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="job-position">
                                <a href="{{ url('/admin/book_modify') }}">管理图书</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="job-position">
                                <a href="{{ url('/admin/student_modify') }}">管理学生</a>
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
                <!-- Open Vacancies List -->
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
                <div class="col-md-4 col-sm-6">
                    <div class="join-us-promo">
                        <!-- Quote -->
                        <div class="join-us-bubble">
                            <blockquote>
                                @if($expire_num == 0)
                                    你没有超期的书
                                @else
                                    你有{{ $expire_num }}本书超期了哦
                                @endif
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