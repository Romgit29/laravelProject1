<ul class="ulEdit mt-3">
  <li><p>Название товара: </p><input name="name" type="text" value="{{$obj["name"]}}"></li>
  <li><p>Цена: </p><input name="cost" type="text" value="{{$obj["cost"]}}"></li>
  <li><p>Описание: </p><textarea name="description" rows="6" cols="80">{{$obj["description"]}}</textarea></li>
  <li><p>В наличии: </p>
    <select name="in_stock" selected="{{$obj["in_stock"]}}">
      <option label="Да" value="1"></option>
      <option label="Нет" value="0"></option>
    </select></li></li>
  <li><p>Размер: </p><select selected="{{$obj["size"]}}" name="size">
    <option label="XS" value="XS"></option>
    <option label="S" value="S"></option>
    <option label="M" value="M"></option>
    <option label="L" value="L"></option>
    <option label="XL" value="XL"></option>
  </select></li>
  <li><p>Ткань: </p><input name="textile" type="text" value="{{$obj["textile"]}}"></li>
  <li><p>Цвет: </p><input type="color" name="color" {{$obj["color"]}}></li>
</ul>
<input type="hidden" name="catg" value="{{$category}}">
<input type="hidden" name="id" value="{{$id}}">
<input type="hidden" name="imglink" id="imglinkHI" value="{{$obj["imglink"]}}">
<input type="hidden" name="category" value="clothes">
