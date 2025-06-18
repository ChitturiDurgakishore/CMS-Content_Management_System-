<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME PAGE</title> {{-- Updated title to HOME PAGE --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
        body {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

            background-image: url("{{ $background->url }}");
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* A more modern font */
            background-color: burlywood;
            color: #333;
            /* CRUCIAL for footer to stick to bottom */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .Header {
            /* Changed tag selector to class selector for more specific styling */
            background-color: #ffffff;
            /* White background for the header */
            padding: 15px 30px;
            /* More padding for better spacing */
            margin: 20px;
            /* Margin around the header block */
            border-radius: 12px;
            /* Slightly rounded corners */
            display: flex;
            align-items: center;
            /* Vertically align items in the center */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            /* Soft shadow for depth */
        }

        .Header h3 {
            margin: 0;
            /* Remove default margin */
            margin-right: 30px;
            /* Space between title and first link */
            font-size: 28px;
            /* Larger, more prominent title */
            color: #2c3e50;
            /* Darker, professional color for the title */
            font-weight: 700;
            /* Bolder title */
            letter-spacing: -0.5px;
            /* Slightly tighter letter spacing */
        }

        /* Styling for the navigation links container */
        .Header nav {
            display: flex;
            gap: 25px;
            /* Space between navigation links */
            margin-left: auto;
            /* Push navigation to the right */
        }

        .Header nav a {
            text-decoration: none;
            /* Remove underline */
            color: #3498db;
            /* A vibrant blue for links */
            font-weight: 600;
            /* Slightly bolder text */
            font-size: 17px;
            /* Good size for navigation links */
            padding: 8px 12px;
            /* Padding around links for click area */
            border-radius: 6px;
            /* Slightly rounded link backgrounds */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Smooth transition on hover */
        }

        .Header nav a:hover {
            background-color: #3498db;
            /* Blue background on hover */
            color: #ffffff;
            /* White text on hover */
        }

        /* Optional: Basic styling for the main content area */
        .main-content {
            padding: 40px 20px;
            margin: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            text-align: center;
            font-size: 1.1em;
            line-height: 1.6;
        }

        .Users-Profile {
            padding: 40px 20px;
            margin: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            text-align: center;
            font-size: 1.1em;
            line-height: 1.6;
        }

        .Users-Profiles {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            /* Allow cards to wrap */
            gap: 20px;
            /* Space between user cards */
            justify-content: center;
            /* Center cards horizontally */
        }

        .container {
            /* This is styling for each user card */

            background-image: url('{{ $background->url }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;

            background-color: #f8f9fa;
            /* Light background for individual cards */
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            /* Padding inside each user card */
            text-align: left;
            /* Align text within card to left */
            flex: 0 0 auto;
            /* Don't grow, don't shrink, auto basis */
            width: 250px;
            /* Fixed width for user cards */
        }

        .container h4 {
            margin-bottom: 5px;
            /* Smaller margin for list items in card */
            font-size: 1em;
            color: white;
        }

        .container h4:first-child {
            font-weight: bold;
            /* Make ID stand out */
            color: #2c3e50;
        }

        /* --- Footer Styles --- */
        footer {
            background-color: #333;
            /* Dark background for footer */
            color: #fff;
            /* White text */
            padding: 1.5rem 0;
            /* Adjusted padding to allow container/row to manage horizontal space */
            font-size: 0.9rem;
            border-top-left-radius: 12px;
            /* Rounded corners for footer top */
            border-top-right-radius: 12px;
            margin-top: auto;
            /* Pushes footer to the bottom */
            display: flex;
            flex-direction: column;
            /* Stack main footer content and bottom row vertically */
            justify-content: center;
            /* Center content vertically */
            align-items: center;
            /* Center content horizontally */
            gap: 20px;
            /* Space between sections if needed */
        }

        .footer-main-row {
            width: 100%;
            /* Take full width of the footer */
            max-width: 1200px;
            /* Limit width for larger screens */
            padding: 0 15px;
            /* Padding for the Bootstrap row */
        }

        .footer-section {
            text-align: left;
            /* Default text alignment */
            margin-bottom: 20px;
            /* Space between sections when stacked on small screens */
        }

        /* Override Bootstrap's default column padding to manage spacing inside footer sections */
        .footer-section>.card-body {
            padding: 0;
            /* Remove default card-body padding if using custom padding within section */
        }

        .footer-section h5 {
            color: #87CEEB;
            /* Lighter blue for headings */
            margin-bottom: 15px;
            font-weight: bold;
        }

        .footer-links-group ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-group ul li {
            margin-bottom: 8px;
        }

        .footer-links-group ul li a {
            color: #f8f9fa;
            /* Light text for links */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links-group ul li a:hover {
            color: #6ec6ff;
            /* Lighter blue on hover */
            text-decoration: underline;
        }

        .footer-bottom {
            width: 100%;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            /* Subtle separator */
            padding-top: 15px;
            margin-top: 15px;
            color: #cccccc;
            /* Lighter copyright text */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .Header {
                flex-direction: column;
                padding: 1rem;
                text-align: center;
                border-radius: 0;
                margin: 0;
            }

            .Header h3 {
                margin-right: 0;
                /* Reset margin for stacking */
                margin-bottom: 10px;
                /* Space below title */
            }

            .Header nav {
                flex-wrap: wrap;
                /* Allow nav links to wrap */
                justify-content: center;
                /* Center nav links */
                gap: 15px;
                /* Adjust gap for smaller screens */
            }

            .main-content,
            .Users-Profile {
                padding: 20px 15px;
                margin: 10px;
            }

            .Users-Profiles {
                flex-direction: column;
                /* Stack user cards vertically */
                align-items: center;
                /* Center stacked cards */
            }

            .container {

                width: 95%;
                /* Make cards almost full width on small screens */
                max-width: 300px;
                /* Keep max-width for very small screens */
            }

            footer {
                padding: 1.5rem 0;
                /* Adjust padding */
                border-radius: 0;
            }

            .footer-section {
                text-align: center;
                /* Center text for stacked sections on mobile */
            }

            img {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>

<body>
    <div>
        <header class="Header">
            <h3>Kishore Pharma</h3>
            <nav>
                @foreach ($headers as $header)
                    <a href="{{ $header->url }}">{{ $header->name }}</a>
                @endforeach
            </nav>
        </header>

        <div class="main-content">
            <h2>Welcome to Kishore Pharma!</h2>
            <p>Your trusted partner in health solutions.</p>
            <p>Explore our dynamic services through the navigation links above.</p>
        </div>
        <div class="Users-Profile">
            <h2>Verified Users</h2>
            <div class="Users-Profiles">
                @foreach ($users as $user)
                    <div class="container">
                        <h4>ID: {{ $user->id }}</h4> {{-- Added "ID:" for clarity --}}
                        <h4>Name: {{ $user->name }}</h4>
                        <h4>Email: {{ $user->email }}</h4>
                        <h4>Password: {{ Str::limit($user->password, 15) }}</h4> {{-- Limited password display for safety --}}
                        <h4>Created At: {{ $user->created_at }}</h4>
                        <h4>Updated At: {{ $user->updated_at }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid footer-main-row">
            <div class="row">
                {{-- Column 1: About Company --}}
                <div class="col-md-4 col-sm-12 footer-section">
                    <h5>About Kishore Company</h5>
                    <p>
                        Kishore Company is dedicated to providing high-quality solutions and services.
                        We strive for excellence in every project.
                    </p>
                </div>

                {{-- Column 2: Social Links --}}
                <div class="col-md-4 col-sm-12 footer-section">
                    <h5>Social Links</h5>
                    <ul>
                        @foreach ($sociallinks as $sociallink)
                            <li><a href="{{ $sociallink->url }}">{{ $sociallink->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- Column 3: Support Links --}}
                <div class="col-md-4 col-sm-12 footer-section">
                    <h5>Support Links</h5>
                    <ul>
                        @foreach ($supportlinks as $supportlink)
                            <li><a href="{{ $supportlink->link }}">{{ $supportlink->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        {{-- Second row: Copyright --}}
        <div class="footer-bottom">
            <span>Copyright &copy; {{ date('Y') }} Kishore Company. All Rights Reserved.</span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        xintegrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
