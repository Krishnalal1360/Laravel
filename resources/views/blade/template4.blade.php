<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <!-- CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>

    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2 id="h_id">Section Title</h2>
            <p>This is a paragraph inside the main section.</p>
        </section>

        <article>
            <h2 id="h_id">Article Title</h2>
            <p>This is an article section for related content.</p>
        </article>
    </main>

    <footer>
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

    <!-- JavaScript File -->
    <script src="{{ asset('assets/script.js') }}"></script>
</body>
</html>
