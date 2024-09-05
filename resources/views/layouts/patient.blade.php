<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    @include("patient.components.css")
</head>
<body>
    <div class="wrapper">
        @include("patient.components.sidebar")
        <div class="main">
            @include("patient.components.header")
            @yield('content')
        </div>
    </div>
    @include("patient.components.footer")
    @include("patient.components.script")
</body>
</html>