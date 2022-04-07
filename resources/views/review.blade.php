<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <title>Review</title>
</head>
<body class="CreateBody">
    @include('components.header')
    <main>
        <h1>Place Review</h1>
        <form action="/myaccount/review/{{$userId}}&{{$itemId}}" method="POST">
            @csrf
            <label for="recommendation">Recommendation:</label>
            <select class="input" id="recommendation" name="recommendation">
                <option value="Good">Good</option>
                <option value="Bad">Bad</option>
            </select>

            <label for="message">Message:</label>
            <textarea required class="input" name="message" type="text" id="message" rows="4" cols="50" maxlength="500"></textarea>

            <button type="submit">SUBMIT</button>
            <a href="/myaccount/review/skip/{{$itemId}}">SKIP</a>
        </form>
    </main>
    @include('components.footer')
</body>
</html>