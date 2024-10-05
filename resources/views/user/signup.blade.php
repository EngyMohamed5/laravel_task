<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('sweetalert::alert')
    @if( app()->getLocale() =='ar')
    <style>
       input {
    direction: rtl;
    text-align: right;
    }
    </style>
    @endif
    <ul>
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
    </ul>

    <h2>Sign Up</h2>
    <form action="{{ route('store_user') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="{{ __('webside/signup.name') }}" required>

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" placeholder=" {{ __('webside/signup.email') }}" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder=" {{ __('webside/signup.password') }}" required>

        <button type="submit">Sign Up</button>
    </form>
    
</body>
</html>