@extends($activeTemplate.'layouts.frontend')
@section('content')
<div class="container py-80">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7 col-xl-5 payment-info">
            <div class="d-flex justify-content-center">
                <div class="verification-code-wrapper">
                    <div class="verification-area">
                        <h5 class="pb-3 text-center border-bottom">@lang('Verify Email Address')</h5>
                        <form action="{{ route('advertiser.password.verify.code') }}" method="POST" class="submit-form">
                            @csrf
                            <p class="verification-text">@lang('A 6 digit verification code sent to your email address')
                                : {{ showEmailAddress($email) }}</p>
                            <input type="hidden" name="email" value="{{ $email }}">

                            @include($activeTemplate.'components.verification_code')

                            <div class="form-group">
                                <button type="submit" class="btn btn--base">@lang('Submit')</button>
                            </div>

                            <div class="form-group">
                                @lang('Please check including your Junk/Spam Folder. if not found, you can')
                                <a href="{{ route('advertiser.password.request') }}">@lang('Try to send again')</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
