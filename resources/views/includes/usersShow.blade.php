<ul class="ulEdit mt-3">
  {{-- {{Auth::user()->name}}
  {{Auth::user()->email}} --}}
  <li><p>Имя: </p><p>{{$user["name"]}}</p></li>
  <li><p>Почта: </p><p>{{$user["email"]}}</p></li>
  <li><p>Логин: </p><p>{{$user["login"]}}</p></li>
  <a href={{route('edit',['users', $user['id']])}}>
    <button type="button" name="button">Редактировать</button>
  </a>
</ul>
