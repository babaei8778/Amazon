@extends('customer.layouts.master-simple')

@section('content')

<section class="vh-100 d-flex justify-content-center align-items-center pb-5">
    <form action="{{ route('auth.customer.login-register') }}" method="post">
        @csrf
    <section class="login-wrapper mb-5">
        <section class="login-logo">
            <img src="{{ asset('customer-assets/images/logo/4.png') }}" alt="">
        </section>
        <section class="login-title">ورود | ثبت‌ نام</section>
        <section class="login-info">لطفا شماره موبایل یا ایمیل خود را وارد کنید</section>
        <section class="login-input-text">
            <input type="text" name="id" value="{{ old('id') }}">
            @error('id')
            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror
        </section>
        <section class="login-btn d-grid g-2"><button class="btn btn-danger">ورود</button></section>
        <section class="login-terms-and-conditions">ورود شما به معنای <a class="term-color" href="#">پذیرش شرایط دیجی‌کالا</a> و <a class="term-color" href="#">قوانین حریم‌خصوصی</a> است</section>
    </section>
    </form>
</section>

@endsection