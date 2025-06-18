<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Default Title' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0;
            font-family: sans-serif;
            background-color: #f0f2f5;
            /* Light background for the whole page */
        }

        header {
            background-color: antiquewhite;
            padding: 10px 20px;
            /* Increased padding for better spacing */
            display: flex;
            align-items: center;
            /* Vertically align items */
            border-radius: 10px;
            margin: 10px;
            /* Add margin around the header */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Subtle shadow */
        }

        header h1 {
            margin: 0;
            /* Remove default margin */
            font-size: 24px;
            color: #333;
        }

        header h3 {
            margin-left: auto;
            /* Pushes the greeting to the far right */
            margin-right: 0;
            font-size: 18px;
            color: #555;
        }

        .BodyContent {
            /* Keep display: flex to put sidebar and MainContent side-by-side */
            display: flex;
            margin: 10px;
            gap: 20px;
            /* Provides space between sidebar and main content */
            /* Removed min-height to allow it to grow with content if desired,
               or you can add a specific height if you want a fixed size. */
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            width: 200px;
            /* Set a fixed width for the sidebar */
            height: auto;
            /* Let its content define its height */
            background-color: aquamarine;
            padding: 20px;
            margin: 10px 0;
            /* Adjust margin if needed, depends on BodyContent margin */
            border-radius: 30px;
            /* CRUCIAL: Remove position: fixed and left: 0 */
            /* position: fixed; */
            /* left: 0; */
            box-sizing: border-box;
            /* Include padding in width */
            align-self: flex-start;
            /* Keeps sidebar aligned to the top within BodyContent */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow */
        }

        .sidebar a {
            margin: 15px 0;
            /* Adjust vertical spacing */
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: color 0.3s ease;
            margin: 30px;
        }

        .sidebar a:hover {
            color: #007bff;
        }

        .MainContent {
            /* IMPORTANT: Remove flex-grow. This means it will only take up the width its content needs. */
            /* flex-grow: 1; */
            background-color: #ffffff;
            /* White background for content area */
            padding: 20px;
            border-radius: 10px;
            /* IMPORTANT: Remove overflow-y. Content will now just push the container's height. */
            /* overflow-y: auto; */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Optional: Add shadow */
            /* If MainContent needs to take all available horizontal space (without flexing),
               you might need to manually calculate its width or use a simpler structure
               like `display: grid` on `BodyContent`. For now, it will just grow with content. */
        }
        .MainMainContent{
             min-height: 400px;
             width: 950px;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <div>
        <header>
            <h1>Kishore Company</h1>
            <h3>Hello ! {{ session('email') }}</h3>
        </header>
        <div class="BodyContent">
            <div class="sidebar">
                <a href="/AdminHome">Home</a>
                <a href="/Header">Header</a>
                <a href="/Background">Background</a>
                <a href="/Users">Users</a>
                <a href="/Footer">Footer</a>
            </div>
            <div class="MainMainContent">
                <div class="MainContent">
                    {{-- This is where the content from your named slot will appear --}}
                    {{ $Content }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
