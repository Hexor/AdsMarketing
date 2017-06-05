@extends('layouts.app')

@section('content')

            <section class="form-section register-form">
                <div class="container">
                    <h1 class="h2 heading-primary font-weight-normal mb-md
                    mt-lg">注册一个新账号</h1>

                    <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                        <div class="box-content">
                            <form role="form" method="POST"
                                  action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <h4 class="heading-primary text-uppercase
                                mb-lg">个人信息</h4>
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">
                                        <div class="form-group">
                                            <label class="font-weight-normal">公司 / 组织 / 个人名称<span class="required">*</span></label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">

                                        <h4 class="heading-primary
                                        text-uppercase mb-lg">登录所需信息</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label class="font-weight-normal">电子邮箱地址<span class="required">*</span></label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="font-weight-normal">密码<span class="required">*</span></label>
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-weight-normal">确认密码<span class="required">*</span></label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="required mt-lg mb-none">*
                                            为必填项目</p>

                                        <div class="form-action clearfix mt-none">
                                            <a href="/login" class="pull-left"><i class="fa fa-angle-double-left"></i> 返回</a>

                                            <input type="submit" class="btn
                                            btn-primary" value="提交">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

@endsection
