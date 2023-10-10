<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Форма обратной связи</title>
    </head>
    <body>
      <p><b>Введите ваш Еmail:</b></p>		
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	  <!--При необходимости надо поменять маршрут на /feedback -->
	  <!--<form method="POST" action="/feedback">-->
    <form method="POST" action="/public/index.php/feedback">
	@csrf
<div>
  <label for="email">Еmail:</label>
  <input type="email" name="email" maxlength="50" required >
  <input type="submit">
</div>
</form>		
    </body>
</html>
