@extends(".layouts.mainL")
@section('title','Главная')
@section("content")
  @isset($path)
    <img src="{{asset('/storage/'.$path)}}" width="300px" alt="">
  @endisset
  <a href="{{route("create",["clothes"])}}"><button type="button" class="btn btn-primary mt-3">Добавить товар</button></a>
  
  <div class="gridGoods">
    @foreach ($clothes as $clothe)
      <div class="goodsElem" id="clothe-{{$clothe["id"]}}">
        <div class="wrapper">
           <div class="el">
             <form class="" action="{{route("deleteScript")}}" method="POST">
               @csrf
               @method('delete')
               <input type="hidden" name="id" value="{{$clothe["id"]}}">
               <input type="hidden" name="category" value="clothes">
               <button type="submit" class="btn btn-primary">Удалить</button>
             </form>
          </div>
          <div class="el">
            <a href="{{route("edit",["clothes", $clothe["id"]])}}"><button type="button" class="btn btn-primary">Редактировать</button></a>
          </div>
        </div>
        <img src="{{asset('/storage/images/'.$clothe["imglink"])}}" width="100%" alt="">
        <p>
          {{$clothe["name"]}}
        </p>
        <p>
          Цена: {{$clothe["cost"]}}₽
        </p>
        <div class="addToBasket">
          <div class="count">
            1
          </div>
          <button type="button" class="btn btn-light">
            -
          </button>
          <button type="button" class="btn btn-light">
            +
          </button>
          <button type="button" class="btn btn-success addToBasketBtn" style="width: 95px;">
            В корзину
          </button>
        </div>
        <button type="button" class="btn btn-primary mt-2">
          Описание товара
        </button>
      </div>
    @endforeach
  </div>
@endsection
