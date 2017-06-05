@extends('layouts.app')

@section('content')
        <section class="form-section">
            <div class="container">
                <h1 class="h2 heading-primary font-weight-normal mb-md
                mt-lg">登录或者创建一个账号</h1>

                <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                    <div class="box-content">
                        <form role="form" method="POST"
                              action="{{ route('login') }}">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-content">
                                        <h3 class="heading-text-color
                                        font-weight-normal">新用户</h3>
                                        <p>尊敬的用户, 当您创建了账户之后, 便能使用我们网站的所有功能. 包括媒体报价查询, 客服支持, 以及高级资源获取等.</p>
                                    </div>

                                    <div class="form-action clearfix">
                                        <a href="/register"
                                           class="btn btn-primary">创建账号</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="panel-body">
                                        <h3 class="heading-text-color
                                        font-weight-normal">已注册的账号</h3>
                                        <p>如果您已经注册过账号, 请先登录<p>

                                        <form class="form-horizontal"
                                              role="form" method="POST"
                                              action="{{ route('login') }}">
                                            {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label
                                                        class="font-weight-normal">电子邮件
                                                    <span class="required">*</span></label>
                                                <input id="email" type="email"
                                                       class="form-control"
                                                       name="email"
                                                       value="{{ old('email') }}"
                                                       required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label
                                                        class="font-weight-normal">密码
                                                    <span class="required">*</span></label>
                                                <input id="password"
                                                       type="password"
                                                       class="form-control"
                                                       name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif

                                                <p class="required">* 必填</p>
                                            </div>

                                        </form>


                                        <div class="form-action clearfix">
                                            <a href="#"
                                               class="pull-left">忘记密码?<a>

                                            <button type="submit" class="btn btn-primary">
                                                登录
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@endsection
