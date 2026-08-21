<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Samsung-@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .card {
            padding: 25px;
            border-radius: 15px;
            
        }

        h2 {
            margin-bottom: 8px;
            color: #222;
        }

        p {
            color: #777;
            margin-bottom: 25px;
        }

        .chart-container {
            position: relative;
            width: 100%;
            height: 400px;
        }
    </style>
  </head>
  <body>
    @include('components.navba')
    <div class="container-fluid">
      @yield('content')
    </div>
  </body>
</html>