@extends('layout._layoutMestre')

@section('content')

<nav class="navbar navbar-light" style="background-color: #003d73;">
    <div class="container-fluid">
        <a class="navbar-brand" style="color:#edd170">T.ISocial</a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success me-md-2 btn-sm" type="button">Registrar</button>
            <button class="btn btn-primary btn-sm" type="button">Login</button>
          </div>
    </div>    
</nav>
<div class=" container row" style="margin-left: auto; margin-right: auto; margin-top: 100px">
  <div class="col-sm-5 container" >
    <img src="{{ asset('imgs/redesocial.jpg') }}" alt="description of myimage"  style="border-radius: 5px; height: 100%; width: 100%">
  </div>
  <div class="col-sm-5 container">
    <div style="background-color: white; height: 100%; padding: 10px; border-radius: 5px;">
      <h5>Seja Bem-vindo ao T.ISocial</h5>
      <p>T.Isocial é uma rede social exclusiva para pessoas que atuam na área da T.i que utiliza fóruns, com o objetivo de ajudar e interagir o público da tecnologia.</p>
      <p><strong>Entre ou cadastre-se hoje mesmo de forma gratuita.</strong></p>
      
    </div>
  </div>
  
</div>

<div id="aviso" style="position: fixed; bottom:0; width: 100% ">

</div>


<script type="text/javascript">
    var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
      $("#aviso").append(
        "<div class='alert show alert-primary alert-dismissible fade shadow-primary' role='alert' data-tor-parent='hover' data-tor='hover:shadow(sm)'>Este site usa cookies e tecnologias afins, que são pequenos arquivos ou pedaços de texto baixados para um aparelho quando o visitante acessa um website ou aplicativo."+
         "<button type='button' id='cockInicial' class='btn-close' data-bs-dismiss='alert' aria-label='Close' data-tor='hover(p):[fade.in rotate.from(180deg)]'></button>"+
         "</div>"
      );
     localStorage.setItem('alerted','yes');
    }

    
    

    
</script>
@endsection