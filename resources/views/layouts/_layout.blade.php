<html>
    <head>
        <title>STEM Grant - @yield('title')</title>
        <style>
            .logo {
                width: 80;
                height: 80;
                padding-left: 10px;
                padding-top: 10px;
            }
            .navbar {
                background-color: crimson;
                flex-direction: row;
                height: 100px;
            }
            .navbar li {
                list-style-type: none;
                float: right;
                color: whitesmoke;
                padding: 15px;
                margin-top: 17px;
                margin-right: 30px;
                font-size: 18pt;
            }
        </style>
    </head>
    <body>
        @section('navbar')
            <nav class="navbar">
                <ul>
                    <li>View Grants</li>
                    <li>Grant Form</li>
                    <li>Home</li>
                </ul>
                <img src='/assets/ewu-logo.png' alt="EWU Eagle!" class="logo"/>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
