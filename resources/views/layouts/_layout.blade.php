<html>
    <head>
        <title>STEM Grant - @yield('title')</title>
        <style>
            .logo {
                transform: scale(0.85, 0.85);
                padding-left: 0px;
                padding-top: 0px;
            }
            .navbar {
                display: flex;
                justify-content: space-between;
                background-color: #ffffff;
                flex-direction: row;
                height: 100px;
                padding: 0;
                margin: 0;
            }
            .navbar li {
                margin-left: auto;
                list-style-type: none;
                float: right;
                color: #282A35;
                padding: 0px;
                margin-top: 20px;
                margin-right: 100px;
                font-size: 18pt;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        @section('navbar')
            <nav class="navbar">
                <img src='/assets/ewu logo.jpg' alt="EWU Eagle!" class="logo"/>
                <ul>
                    <li>Grants</li>
                    <li>Home</li>
                </ul>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
