<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <title>{{$item->item_name}}</title>
</head>
<body class="ItemBody">
    @include('components.header')
    <main>
        <h2>{{$item->item_name}}</h2>
        <section class="UpperSection">
            <figure>
                <img src="{{$item->image}}" alt="Image of Item">
            </figure>
            <div>
                <p>Lend by: {{$user->name}}</p>
                <p>Contact: {{$user->email}}</p>
                <p>Category: {{$item->tag}}</p>
                <p>Number of borrowing days: {{$item->loan_time}}</p>
                @if ($item->is_loaned == TRUE)
                    <p>Already loaned: Yes</p>
                @else
                    <p>Already loaned: No</p>
                @endif
            </div>
            @if ($login_id == $item->id_borrower)
                <a href="/review/{{$user->id}}&{{$item->id}}">Return</a>
            @elseif ($item->is_loaned == 1 || $login_id == $user->id)
                <button>Borrow Now</button>
            @else
                <a href="/borrow/{{$item->id}}">Borrow Now</a>
            @endif
        </section>
        <section class="LowerSection">
            <h3>Item Description</h3>
            <p>{{$item->description}}</p>
        </section>
    </main>
    @include('components.footer')
</body>
</html>