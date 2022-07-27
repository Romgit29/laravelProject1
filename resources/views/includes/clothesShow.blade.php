<ul class="ulEdit mt-3">
  <li><p>Название товара: </p><p>{{$obj["name"]}}</p></li>
  <li><p>Цена: </p><p>{{$obj["cost"]}}</p></li>
  <li><p>Описание: </p><p>{{$obj["description"]}}</p></li>
  <li><p>В наличии: </p>
  <p>
    @if($obj["in_stock"]=="1")
      Да
    @endif
    @if($obj["in_stock"]=="0")
      К сожалению, нет
    @endif
  </p></li>
  <li><p>Размер: </p><p>{{$obj["size"]}}</p></li>
  <li><p>Ткань: </p><p>{{$obj["textile"]}}</p></li>
  <li><p>Цвет: </p><p>{{$obj["color"]}}</p></li>
</ul>
