<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>


<style>
    li:hover{
    color: rgb(255,119,51);
    font-size: 24px;

   }

    li{
        margin: 5px;
    }

    a{
        text-decoration: none;
        color: currentcolor;
    }

    body{
        font-family: arial;
        background-color: rgb(59,122,87);
        font-size: 25px;

    }

    ul,li,ol,menu{
        list-style: none;
    }

    .contenitore{
        width: 1000px;
        margin: 0 auto;
    }

    .riga{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .row-ul{
        display: flex;
    }

    header, footer{
        background-color: rgb(0,8,51);
        color: white;
        font-weight: bold;
    }

    main{
        text-align: center;
        color: rgb(255,119,51);
        font-size: 80px;
    }

    .logo{
        font-size: 40px;
        font-weight: bold;
    }
</style>