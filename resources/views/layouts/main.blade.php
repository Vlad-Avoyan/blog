<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="row"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('main.index')  }}">Main</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="{{ route('post.index')  }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="{{ route('about.index')  }}">About</a>
                    </li>
                    <li class="nav-item ">
                        <a class="navbar-brand" href="{{ route('contacts.index')  }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
 @yield('content')
</body>
</html>
