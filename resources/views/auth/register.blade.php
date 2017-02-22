@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('user.register') }}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{ trans('user.username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('user.email_address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('user.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">{{ trans('user.confirm_password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">{{ trans('user.first_name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">{{ trans('user.last_name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_org') ? ' has-error' : '' }}">
                            <label for="user_org" class="col-md-4 control-label">{{ trans('user.user_org') }}</label>

                            <div class="col-md-6">
                                <input id="user_org" type="text" class="form-control" name="user_org" value="{{ old('user_org') }}" required>

                                @if ($errors->has('user_org'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_org') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_title') ? ' has-error' : '' }}">
                            <label for="user_title" class="col-md-4 control-label">{{ trans('user.user_title') }}</label>

                            <div class="col-md-6">
                                <input id="user_title" type="text" class="form-control" name="user_title" value="{{ old('user_title') }}" required>

                                @if ($errors->has('user_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_postaddr') ? ' has-error' : '' }}">
                            <label for="user_postaddr" class="col-md-4 control-label">{{ trans('user.user_postaddr') }}</label>

                            <div class="col-md-6">
                                <input id="user_postaddr" type="text" class="form-control" name="user_postaddr" value="{{ old('user_postaddr') }}" required>

                                @if ($errors->has('user_postaddr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_postaddr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_country') ? ' has-error' : '' }}">
                            <label for="user_country" class="col-md-4 control-label">{{ trans('user.user_country') }}</label>

                            <div class="col-md-6">
                                <select id="user_country" class="form-control" name="user_country" required>
                                    <option value="">{{ trans('user.select_country') }}</option>
                                    @foreach($countries as $country)
                                    <option value="{{ $country->id }}"{{ old('user_country') == $country->id ? 'selected' : ''}}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('user_country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_research') ? ' has-error' : '' }}">
                            <label for="user_research" class="col-md-4 control-label">{{ trans('user.user_research') }}</label>

                            <div class="col-md-6">
                                <textarea id="user_research" type="text" class="form-control" name="user_research" required>{{ old('user_research') }}</textarea>

                                @if ($errors->has('user_research'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_research') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('user.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
