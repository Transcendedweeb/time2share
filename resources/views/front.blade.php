<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <script src="js/main.js"></script>
    <title>Time2Share</title>
</head>
<body class="FrontBody">
    @include('components.header')

    <main>
        <div class="DropDown">
            <button onclick="dropDown()" class="DropdownButton">Filter</button>
            <div id="js--dropdown" class="Dropdown-Content">
                <button onclick="filter('all')">All</button>
                <button onclick="filter('games')">Games</button>
                <button onclick="filter('tools')">Tools</button>
                <button onclick="filter('books')">Books</button>
                <button onclick="filter('electronics')">Electronics</button>
                <button onclick="filter('films')">Films</button>
                <button onclick="filter('other')">Other</button>
            </div>
        </div>

        @foreach($items as $item)
            @if ($item->is_loaned != 1)
            <section class="{{$item->tag}}">
                    <figure>
                        <img src="{{$item->image}}" alt="Image of product">
                    </figure>
                    <div>
                        <h2>{{$item->item_name}}</h2>
                        <p>Category: {{$item->tag}}</p>
                        <p>Number of borrowing days: {{$item->loan_time}} days</p>
                        @foreach($users as $user)
                            @if($item->id_lender == $user->id)
                                <p>Lend by: {{$user->name}}</p>
                            @endif
                        @endforeach
                    </div>
                    <a href="/item/{{$item->id}}">SEE ITEM</a>
            </section>
            @endif
        @endforeach
    </main>

    @include('components.footer')
</body>
</html>