<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Lobster Font from Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&display=swap">
    <!-- Bootstrap CSS Link (Make sure to include Bootstrap in your project) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Nature-inspired styles */
        body {
            font-family: 'Lobster', cursive;
            background-color: #d6f0d6; /* Light green background */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-size: 1.6rem; /* Smaller font size */
            color: #2d3a3a;
        }

        .form-input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #5c857a;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #235d53;
        }

        .form-checkbox {
            margin-top: 1rem;
        }

        .form-button {
            background-color: #46a049;
            color: #ffffff;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.6rem; /* Smaller font size */
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #368239;
        }

        .form-link {
            color: #46a049;
            text-decoration: none;
            margin-top: 0.5rem;
            font-size: 1.2rem;
        }

        .form-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control form-input">
                <!-- Error Messages -->
                @error('name')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-control form-input">
                <!-- Error Messages -->
                @error('email')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control form-input">
                <!-- Error Messages -->
                @error('password')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-input">
                <!-- Error Messages -->
                @error('password_confirmation')
                <div class="text-red-500 mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('login') }}" class="form-link">
                    Already registered?
                </a>
                <button type="submit" class="btn btn-primary form-button">
                    Register
                </button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Link (Make sure to include Bootstrap in your project) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>