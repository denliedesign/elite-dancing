@extends('layouts.app')
@section('content')

    <div class="banner-wrap d-none d-md-block" style="position: relative;">
        <div class="banner-contact"></div>
        <div class="custom-shape-divider-bottom-1663856745">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M598.97 114.72L0 0 0 120 1200 120 1200 0 598.97 114.72z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="container py-4">
        <h3 class="font-staat text-center" style="font-size: 100px; line-height: 0.9em;">Contact</h3>
        <form action="{{ route('contact.store') }}" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                <div>{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                <div>{{ $errors->first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                <div>{{ $errors->first('message') }}</div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary mt-3">Send Message</button>
        </form>
    </div>


@endsection

