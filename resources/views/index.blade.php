@extends('layout._layoutMestre')

@section('content')

<nav class="navbar navbar-light" style="background-color: #003d73;">
    <div class="container-fluid">
        <a class="navbar-brand" style="color:#edd170">TSocial</a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success me-md-2 btn-sm" type="button">Registrar</button>
            <button class="btn btn-primary btn-sm" type="button">Login</button>
          </div>
    </div>    
</nav>
<div class="alert show alert-primary alert-dismissible fade shadow-primary" role="alert" data-tor-parent="hover" data-tor="hover:shadow(sm)" style="position: fixed; bottom:0; " id="aviso">
  Este site usa cookies e tecnologias afins, que são pequenos arquivos ou pedaços de texto baixados para um aparelho quando o visitante acessa um website ou aplicativo.
  <button type="button" id="cockInicial" class="btn-close" data-bs-dismiss="alert" aria-label="Close" data-tor="hover(p):[fade.in rotate.from(180deg)]"></button>
</div>


<script type="text/javascript">
    var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
     alert("My alert.");
     localStorage.setItem('alerted','yes');
    }

    /*
    for(var i = 0; i < getcoockie.length; i++) {
      if (!getcoockie[i].includes("welcome=true")) {
      
        
        break;
      } 
    }*/

    
    

    
</script>
@endsection