<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <title>Create Item</title>
</head>
<body class="CreateBody">
    @include('components.header')
    <main>
        <h1>Lend Item</h1>
        <form action="/myaccount" method="POST">
            @csrf

            <label for="item_name" required>Titel:</label>
            <input required class="input" name="item_name" type="text" id="item_name" maxlength="20" require></input>

            <label for="tag">Category:</label>
            <select class="input" id="tag" name="tag">
                <option value="games">Games</option>
                <option value="tools">Tools</option>
                <option value="electronics">Electronics</option>
                <option value="books">Books</option>
                <option value="films">Films</option>
                <option value="other">Other</option>
            </select>

            <label for="description" required>Description:</label>
            <textarea required class="input" name="description" type="text" id="description" rows="4" cols="50" maxlength="500"></textarea>

            <label for="time">Expected loan time (in days):</label>
            <input class="input" name="loan_time" type="number" id="time" required></input>

            <button type="submit">SUBMIT</button>
        </form>
    </main>
    @include('components.footer')
</body>
</html>