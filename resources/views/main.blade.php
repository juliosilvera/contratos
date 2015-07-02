<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/all.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<title></title>
</head>
<body>
@include('part.nav', $menu)
<div class="container" style="margin-top: 80px">
  @yield('content')
</div>
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="/js/all.js"></script>
@yield('footer')

</body>
</html>