@extends(".layouts.mainL")
@section('title','Редактирование')
@section("content")
  <form class="" action={{route('createScript')}} style = "margin-top:30px;" method="post" enctype="multipart/form-data">
    @csrf
  <img id="imgPic" src="{{asset('/storage/images/img_default.png')}}" width="304px" alt="">
  <input id="imgInp" type="file" name="image">
    <ul class="ulEdit mt-3">
      <li><p>Название товара: </p><input name="name" type="text"></li>
      <li><p>Цена: </p><input name="cost" type="text"></li>
      <li><p>Описание: </p><textarea name="description" rows="6" cols="80"></textarea></li>
      <li><p>В наличии: </p>
        <select name="in_stock">
          <option label="Да" value="1"></option>
          <option label="Нет" value="0"></option>
        </select></li></li>
      <li><p>Размер: </p><select name="size">
        <option>XS</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
      </select></li>
      <li><p>Ткань: </p><input name="textile" type="text"></li>
      <li><p>Цвет: </p><input type="color" name="color"></li>
    </ul>
    <input type="hidden" name="catg" value="{{$category}}">
    <script type="text/javascript">
      let myul = document.querySelectorAll(".ulEdit li")
      for(let i of myul){
        i.style.marginTop="10px"
        i.querySelector("p").style.marginBottom="1px"
      }

    function readURL(input) {
      console.log(input);
      let imgPic = document.querySelector("#imgPic")
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {

              imgPic.src= e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
        else{
          imgPic.src = 	"http://localhost:8000/storage/images/img_default.png"
        }
    }

    let imgInp = document.querySelector("#imgInp")
    imgInp.onchange = function () {
        readURL(this);
    };

    </script>
    <button type="submit" class="btn btn-primary">Подтвердить</button>
  </form>
@endsection
