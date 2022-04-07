<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <script src="js/main.js"></script>
    <title>{{$user->name}}</title>
</head>
<body class="AccountBody" onload="filter('lending', true, '{{$user->role}}')">
    @include('components.header')
    <main>
        <section class="AccountInfo">
            <h1>{{$user->name}}</h1>
            <p>Contact: {{$user->email}}</p>
        </section>
        <div class="DropDown">
            <button onclick="dropDown()" class="DropdownButton">Filter</button>
            <div id="js--dropdown" class="Dropdown-Content">
                <button onclick="filter('lending', true, '{{$user->role}}')">Lending</button>
                <button onclick="filter('borrowing', true, '{{$user->role}}')">borrowing</button>
                <button onclick="filter('reviews', true, '{{$user->role}}')">Reviews</button>
                @if ($user->role == "admin")
                    <button onclick="filter('bh', true, '{{$user->role}}')">BanHammer</button>
                    <button onclick="filter('rmi', true, '{{$user->role}}')">RemoveItems</button>
                @endif
            </div>
            <a href="/user/logout" class="LogoutButton">Logout</a>
        </div>
        <article>
            @include('components.account_items')
        </article>
    </main>
    @include('components.footer')
</body>
</html>