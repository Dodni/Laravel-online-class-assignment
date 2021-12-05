@extends('layout.app')

@section('content')
    <h1 class="text-center my-4">{{ __('Contact') }}</h1>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ URL::to('/contact') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">{{ __('Name:') }}</label>
            <input type="text" class="form-control" name="name" placeholder="{{ __('Name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('Phone:') }}</label>
            <input type="text" class="form-control" name="phone_number" placeholder="{{ __('Phone number') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('E-mail:') }}</label>
            <input type="email" class="form-control" name="email" placeholder="{{ __('E-mail') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">{{ __('Message:') }}</label>
            <textarea class="form-control" name="msg" placeholder="{{ __('Message') }}"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ __('Send') }}</button>
    </form>
@endsection
