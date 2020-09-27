<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="Content-Language" content="pt-br">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=ranches&display=swap" rel="stylesheet">

        <link href="/css/style.css" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.css">

        <link type="text/css" rel="stylesheet" href="/css/custom.css">
        <!-- Compiled and minified JavaScript -->
       <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
            
        <script type = "text / javascript" src = "https://www.gstatic.com/charts/loader.js"> </script>

<title>Pconsult</title>
</head>
<body>

<header >  
    

        <nav class=" red ">
            <div class="container  ">
        <div class="nav-wrapper ">
            <a href="/home" class="brand-logo texto "><i class="material-icons ">fire_extinguisher</i>Paloma Consultoria</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-red texto" href="/home">Home</a></li>
                <li><a class="waves-effect waves-red texto" href="/contato">Contato</a></li>
                <li><a class="waves-effect waves-red texto" href="/quemSomos">Quem somos</a></li>
                <li><a class="waves-effect waves-red texto"  href="orcamento"> Orçamento</a></li>

 
               
      </ul>
    </div>
            </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="/home">Home</a></li>
    <li><a href="/contato">Contato</a></li>
    <li><a href="/quemSomos">Quem Somos</a></li>
    <li><a href="/orcamento">Orçamento</a></li>
  </ul>
  </nav>
  <div class="l12 s6">
    
    <div class="carousel carousel-slider">
       
        <a class="carousel-item" href="/home"><img src="img/logo2.jpg"></a>
        
      </div>
            
    </div>
</header>


<div class="row l12">

<?php include_once '../App/View/'.$view.'.php';?>
</div>
    
    

    












        

   


<footer class="page-footer black ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12 ">
                <h5 class="white-text texto">Paloma Consultoria</h5>
                <p class="grey-text text-lighten-4">Elabora,executa e presta consultoria em projetos de Prevenção de Combate a Incêndio (PPCI).

                </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Siga-nos</h5>
                <ul>
                  <li><a href="https://www.facebook.com/pconsultoriacontraincendio"><img style="margin-right: 5px;" class="icone prefix left"  width="20px" height="20px"  src="/img/facebook.png">facebook</a></li>
      
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Todos direitos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Desenvolvedor Natácio Carvalho</a>
            </div>
          </div>
        </footer>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f70d44b4704467e89f2b6e9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
            
<script>  

M.AutoInit(); 
 

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems,{
        fullWidth: true,
        indicators:true,
        noWrap:true
    });
  });




</script>

</body>
</html>