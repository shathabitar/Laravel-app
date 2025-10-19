<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>

<body class="text-center px-8 py-12">

    <h1>Welcome</h1>
    <p>click button below</p>

    <a href="/ninjas" class="btn m-4 inline-block"> find ninjas</a>

    <form action="/import" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="btn" type="file" name="csv" accept=".csv">
        <button class="btn" type="submit">Import</button>
    </form>

</body>

</html>