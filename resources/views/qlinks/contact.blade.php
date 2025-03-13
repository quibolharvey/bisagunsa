{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - KijotableFit</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <header>
        <h1 class="text-center my-4">Contact Us</h1>
    </header>

    <main class="container">
        <p>If you have any questions or need more information, feel free to reach out to us. We're here to help!</p>
        <p><strong>Email:</strong> kijotgym@gmail.com</p>
        <p><strong>Phone:</strong> (123) 456-7890</p>
        <p><strong>Address:</strong> Calape, Bohol ilawm dagat</p>
        <div class="mt-4">
            <a href="javascript:history.back()" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
    </main>

    <footer class="text-center mt-4">
        <p>&copy; 2024 KijotableFit. All Rights Reserved.</p>
    </footer>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM MANAGEMENT</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .navbar {
            background-color: #333;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">KijotableFit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('classes') }}">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('trainers') }}">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('membership') }}">Membership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <header>
        <h1 class="text-center my-4">Contact Us</h1>
    </header>

    <main class="container">
        <p>If you have any questions or need more information, feel free to reach out to us. We're here to help!</p>
        <p><strong>Email:</strong> kijotgym@gmail.com</p>
        <p><strong>Phone:</strong> (123) 456-7890</p>
        <p><strong>Address:</strong> Calape, Bohol ilawm dagat</p>
        <div class="mt-4">
            <a href="javascript:history.back()" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
    </main>

    <footer class="text-center mt-4">
        <p>&copy; 2024 KijotableFit. All Rights Reserved.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-VZIYIgpnaJ7MfO4USjlWOlzx5YIR5TBeFHSaIxFrKXMBa9G6kDd4MdZ7Ik7iDAZD" crossorigin="anonymous"></script>
</body>
</html>

