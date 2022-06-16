@extends('layout._layoutMestre')
<style>
    * {
  position: relative;
  box-sizing: border-box;
}

.iframely-embed {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 50;
  background: white;
}

#app {

  z-index: 100;

  &:hover {
    opacity: 0.5;
  }
}




.title {
  padding-left: 1em;
  grid-column: 1 / -1;
  grid-row: 1;
  font-size: 8vw;
  width: 100%;
  z-index: 2;
  color: #edd170

  > .title-inner {
    display: inline-block;
  }
}

@keyframes text-clip {
  from {
    clip-path: polygon(0% 100%, 100% 100%, 100% 100%, 0% 100%);
  }
  to {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }
}

@keyframes outer-left {
  from {
    transform: translateX(50%);
  }
  to {
    transform: none;
  }
}

@keyframes inner-left {
  from {
    transform: translateX(-50%);
  }
  to {
    transform: none;
  }
}



.cafe-inner {
  display: inline-block;
  animation: inner-left 1s 1s ease both,
    text-clip 1s 0s cubic-bezier(0.5, 0, 0.1, 1) both;
}

.mozart-inner {
  animation: text-clip 1s 0s cubic-bezier(0.5, 0, 0.1, 1) both;
}

.title {
  animation: outer-left 1s 1s ease both;
}



.mozart {
  display: inline-block;
}


.image {

  margin-left: -2rem;
  opacity: 0.7;

  animation: image-in 1s cubic-bezier(0.5, 0, 0.1, 1) 2s backwards;

  @keyframes image-in {
    from {
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }
    to {
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
  }

  img {
    display: block;
    width: 100%;
    height: auto;
  }
}

body:active * {
  animation: none !important;
}

    
</style>

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


<div id="app" >
    <div class="title" >
        <div class="title-inner" style="color: #edd170">
            <div class="cafe">
            <div class="cafe-inner">Bem-vindo ao</div>
            </div>
            <div class="mozart" >
            <div class="mozart-inner">TSocial</div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="aviso" style="background-color: white; padding:5px; position: fixed; bottom:0; right:1.5%; left:1.5%; border-radius: 15px; display:none">
    <div class="col-md-12">
        <p>Este site usa cookies e tecnologias afins, que são pequenos arquivos ou pedaços de texto baixados para um aparelho quando o visitante acessa um website ou aplicativo. </p>
    </div>
</div>

<script type="text/javascript">
    let getcoockie = document.cookie.split(";")[0];
    getcoockie = getcoockie.split("=")[0];
    if (getcoockie != 'welcome'){
        setInterval(function(){
            $("#aviso").css("display", "block");
            document.cookie = "welcome = true";   
        }, 5000);
        
    } else {
        $("#aviso").css("display", "none");
    }
    
</script>
@endsection