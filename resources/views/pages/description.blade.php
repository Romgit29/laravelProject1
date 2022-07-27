@extends(".layouts.mainL")
@section('title','Редактирование')
@section("content")
  <img id="imgPic" src="{{asset('/storage/images/'.$obj["imglink"])}}" width="304px" style = "margin-top:30px;" alt="">
  @include('includes.'.$category.'Show')

  <script type="text/javascript">
    window.onload = function () {

      let myul = document.querySelectorAll(".ulEdit li")
      for(let i of myul){
        i.style.marginTop="10px"
        i.querySelector("p").style.marginBottom="1px"
      }
    }
  </script>
@endsection
