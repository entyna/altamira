<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <span>This uses loginlayout layout</span>
  <div class="w-2/4 h-2/4 border-2 border-slate-700">
    {{ $slot }}
  </div>
</body>
</html>