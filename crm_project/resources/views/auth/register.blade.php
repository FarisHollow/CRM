<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <style>
        .input-field {
            /* Add your input field styles here */
            /* Example styles */
            padding: 2.5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            margin-top: 5px;
            font-size: 16px;
        }

        .btn-primary {
            /* Add your button styles here */
            /* Example styles */
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:py-16">

        

            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
               
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                   

                    <form class="space-y-4 md:space-y-6" method="POST" action="{{route('register')}}">
                        @csrf

                        <h1 id="signup-title" class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Sign Up as 
                        </h1>
                       
                        <div>
                            <!-- Add the user type toggle button -->
                            <div class="mb-4 flex space-x-4">
                                <label class="text-sm font-medium text-gray-900 dark:text-white">Select User Type:</label>
                                <div>
                                    <label for="adminToggle" class="flex items-center cursor-pointer">
                                        <input type="radio" id="adminToggle" name="role" value="admin" class="mr-2" required
                                            @if (old('role') === 'admin') checked @endif>
                                        Admin
                                    </label>
                                </div>
                                <div>
                                    <label for="employeeToggle" class="flex items-center cursor-pointer">
                                        <input type="radio" id="employeeToggle" name="role" value="employee" class="mr-2"
                                            required @if (old('role') === 'employee') checked @endif>
                                        Employee
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                            <input type="text" name="name" id="name" class="input-field" placeholder="John Doe" required>
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="input-field" placeholder="name@company.com" required>
                        </div>

                        <div>
                            <label for= "password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" class="input-field" required>
                        </div>

                        <div>
                            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="input-field"
                                required>
                        </div>

                        <div id="commonFields">
                            <div>
                                <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                                <input type="text" name="designation" id="designation" class="input-field" required>
                            </div>
                        </div>

                       
                        <button type="submit" class="w-full btn btn-primary">
                            Register
                        </button>

                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li style="color: red;">{{ $error }}</li>
                            @endforeach
                        </ul>
                                
                    </form>
                   
                </div>
            </div>
        </div>
    </section>

    <script>
        // JavaScript to show/hide fields and update title based on user type selection
        const adminToggle = document.getElementById('adminToggle');
        const employeeToggle = document.getElementById('employeeToggle');
        const commonFields = document.getElementById('commonFields');
        const title = document.getElementById('signup-title');

        adminToggle.addEventListener('change', () => {
            if (adminToggle.checked) {
                commonFields.style.display = 'block';
                title.textContent = 'Sign Up as Admin';
            } else {
                commonFields.style.display = 'none';
            }
        });

        employeeToggle.addEventListener('change', () => {
            if (employeeToggle.checked) {
                commonFields.style.display = 'block';
                title.textContent = 'Sign Up as Employee';
            } else {
                commonFields.style.display = 'none';
            }
        });
    </script>
</body>

</html>