<ul class="ulEdit mt-3">
  <li><p>Имя: </p><input type="text" name="name" value="{{$obj["name"]}}"></li>
  <li><p>Почта: </p><input type="email" name="email" value="{{$obj["email"]}}"></li>
  <li><p>Логин: </p><input type="text" name="login" value="{{$obj["login"]}}"></li>
  <input type="hidden" name="id" value="{{$obj["id"]}}">
  <input type="hidden" name="category" value="users">
</ul>
