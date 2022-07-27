@extends(".layouts.mainL")
@section('title','Редактирование')
@section("content")
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
