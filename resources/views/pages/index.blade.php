@extends(".layouts.mainL")
@section('title','Главная')
@section("content")
  {{-- @isset($path)
    <img src="{{asset('/storage/'.$path)}}" width="300px" alt="">
  @endisset --}}
  @if(Auth::user())
  @if(Auth::user()->hasRole("admin"))
  <a href="{{route("create",["clothes"])}}"><button type="button" class="btn btn-primary mt-3">Добавить товар</button></a>
  @endif
  @endif
  <div class="gridGoods">
    @foreach ($objects as $obj)
      <div class="goodsElem" id="clothe-{{$obj["id"]}}">
        <div class="wrapper">
           <div class="el">
           <form class="" action="{{route("deleteScript")}}" method="POST">
             @csrf
             @method('delete')
             <input type="hidden" name="id" value="{{$obj["id"]}}">
             <input type="hidden" name="category" value="clothes">
             @if(Auth::check())
             @if(Auth::user()->hasRole("admin"))
             <button type="submit" class="btn btn-primary">Удалить</button>
             @endif
             @endif
           </form>
        </div>
          @if(Auth::user())
          @if(Auth::user()->hasRole("admin"))
          <div class="el">
            <a href="{{route("edit",["clothes", $obj["id"]])}}"><button type="button" class="btn btn-primary">Редактировать</button></a>
          </div>
          @endif
          @endif
        </div>
        <img src="{{asset('/storage/images/'.$obj["imglink"])}}" width="100%" alt="">
        <p>
          {{$obj["name"]}}
        </p>
        <p>
          Цена: {{$obj["cost"]}}₽
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
        <a href="{{route("description",["clothes", $obj["id"]])}}">
          <button type="button" class="btn btn-primary mt-2">
            Описание товара
          </button>
        </a>
      </div>
    @endforeach
  </div>
@endsection
