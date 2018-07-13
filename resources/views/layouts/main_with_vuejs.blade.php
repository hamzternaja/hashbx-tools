<!DOCTYPE html>
<html lang="en">

<head>
    <title>HASHBX.IO Analysis Tools 1.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="/">HASHBX.IO Tools 1.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/token">Token</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cloudmining">Cloud Mining</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/whale-calculator">Whale Calculator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Quiz App</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/Porrapat/hashbx-tools" target="_blank">Github Source Code</a>
            </li>
        </div>


    </nav>

    <div class="container" style="margin-top:30px">
        @yield('content')
    </div>

</body>

</html>