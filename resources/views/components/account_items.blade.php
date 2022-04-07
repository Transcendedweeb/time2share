<section>
    @foreach($items as $item)
        @if ($item->id_lender == $user->id)
        <a href="/item/{{$item->id}}" class="lending">
            <div>
                <h2>{{$item->item_name}}</h2>
                <p>Category: {{$item->tag}}</p>
                <p>Number of borrowing days: {{$item->loan_time}} days</p>
                @if ($item->is_loaned == 1)
                    <p>Item is on loan</p>
                @else
                    <p>Item is available</p>
                @endif
            </div>
        </a>
        @endif
    @endforeach
</section>
<section>
    @foreach($items as $item)
        @if ($item->id_borrower == $user->id)
        <a href="/item/{{$item->id}}" class="borrowing">
            <div>
                <h2>{{$item->item_name}}</h2>
                <p>Category: {{$item->tag}}</p>
                <p>Number of borrowing days: {{$item->loan_time}} days</p>
                <p>Item is on loan</p>
            </div>
        </a>
        @endif
    @endforeach
</section>
<section>
    @foreach($reviews as $review)
        <div class="reviews">
            <h2>{{$review->recommendation}}</h2>
            @foreach($users as $other_user)
            @if ($other_user->id == $review->id_sender)
            <h3>From:</h3>
            <p>{{$other_user->name}}</p>
            @endif
            @endforeach
            <h3>Message:</h3>
            <p>{{$review->message}}</p>
        </div>
    @endforeach
</section>

@if ($user->role == "admin")
    <section>
        @foreach($users as $usr)
            @if ($usr->is_blocked == FALSE)
            <a href="/admin/banhammer/{{$usr->id}}" class="bh">
                <div>
                    <h2>{{$usr->name}}</h2>
                    <p>E-mail: {{$usr->email}}</p>
                </div>
            </a>
            @endif
        @endforeach
    </section>

    <section>
        @foreach($items as $item)
            <a href="/admin/remove/item/{{$item->id}}" class="rmi">
                <div>
                    <h2>{{$item->item_name}}</h2>
                    <p>Category: {{$item->tag}}</p>
                </div>
            </a>
        @endforeach
    </section>

@endif