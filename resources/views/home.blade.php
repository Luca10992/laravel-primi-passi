<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>

<body>

    <header">
        <div class="container"
            style="display: flex; padding: 0 3rem; align-items: center; justify-content: space-between">
            <div class="title">
                <h1>{{ $title }}</h1>
            </div>
            <div class="nav-bar">
                <ul style="list-style-type: none; display: flex; gap: 2rem">
                    @foreach ($links as $link )
                    <li>
                        <a href="#" style="text-decoration-line: none;">
                            {{ $link }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="search-bar">
                <input type="search" name="search" id="search">
                <button>Search</button>
            </div>
        </div>
        </header>

</body>

</html>