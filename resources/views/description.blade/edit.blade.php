@extends(".layouts.mainL")
@section('title','Редактирование')
@section("content")
  <form class="" action={{route('editSctipt')}} method="POST" style = "margin-top:30px;"  enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    {{Auth::user()->name()}}
  <img id="imgPic" src="{{asset('/storage/images/'.$obj["imglink"])}}" width="304px" alt="">
  <input id="imgInp" type="file" name="image">

  @include('includes.'.$category.'Edit')
    <button type="submit" class="btn btn-primary">Подтвердить</button>
  </form>

  <script type="text/javascript">
    window.onload = function () {

      let myul = document.querySelectorAll(".ulEdit li")
      for(let i of myul){
        i.style.marginTop="10px"
        i.querySelector("p").style.marginBottom="1px"
      }

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              let imgInp = document.querySelector("#imgPic")
              imgInp.src= e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
        else{
          let imgInp = document.querySelector("#imgPic")
          let defaultImg = document.querySelector("#imglinkHI")
          imgInp.src = `http://localhost:8000/storage/images/${defaultImg.value}`
        }
      }

      let imgInp = document.querySelector("#imgInp")
      imgInp.onchange = function () {
          readURL(this);
      };
    }
  </script>
@endsection
