<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AdicTechPeru Sistema v.1.0</title>
<script language="JavaScript" type="text/javascript" src="java/tool.js"></script>
    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="saphv2.css" rel="stylesheet">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >

<!-- top menu -->
<nav id="top-menu" class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navegación toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">AdicTechPeru</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
             <i class="fa fa-comments-o"></i>
               Mensajes 
             <span class="bubble">2</span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Leer mensajes</a></li>
            <li><a href="#">Enviar mensajes</a></li>
            </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <i class="fa fa-globe"></i>
            Notificaciones
          <span class="bubble">2</span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

        <li id="user-setting" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <img src="images/adictech.jpg">
          <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index.php">Cerrar Session</a></li>
            
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- /top memu -->


<!-- body -->
<div class="container">
<div class="row">
    
   <!-- sidebar -->
   <div class="col-md-3">
     <!-- panel -->
        <div class="panel panel-default">
         <div class="panel-heading">
            <i class="fa fa-bars"></i> Menu
            <i class="showmenu fa fa-angle-down pull-right"></i>
         </div>
          <div id="sider-menu" class="panel-body">
             <!-- links -->
                 <a href="panel.html"><i class="fa fa-home"></i> Inicio</a>
                 <a href="generador.php"><i class="fa fa-credit-card"></i> Generador</a>
                 <a href="users.html"><i class="fa fa-users"></i> Cuentas</a>
                 <a href="about.html"><i class="fa fa-code"></i> Acerca de Nosotros</a>
             <!-- /links -->
          </div>
        </div>
     <!-- /panel -->
   </div>
   <!-- /sidebar -->

   <!-- controls -->
   <div class="col-md-9">
    <!-- panel -->
        <div class="panel panel-default">
         <div class="panel-heading"><i class="fa fa-desktop"></i> Generador de Tarjetas </div>
          <div class="panel-body">
            

 
        <!-- Generador -->
        <div class="input_label"> 
        		<form name="console" id="console" class="col-sm-2 control-label" role="form" method="POST">
			
				 
					<label for="name"> 
						<span class="input-group-addon">Bin:</span>
					</label>
				</div> 
				<select name="ccpp" onchange="chgccp();" class="form-control">
				<script language="JavaScript" type="text/javascript">
				<!--
				for (i=1;i<=tw;i++) {
					if (i!=1) {document.writeln("<option>"+cd[i]);} else {document.writeln("<option selected>"+cd[i]);}
				}
				// -->
				</script>
				</select>
			
					<label for="name"> 
						<span class="input-group-addon">Inserte su Bin:</span>
					</label>
				 
				<input type="text" class="form-control" id="ccpN" name="ccp" value="" size="24" placeholder="xxxx xxxx xxxx xxxx" onchange="sanitizar();" maxlength="24">
			
			
					<label for="name"> 
						<span class="input-group-addon">Cantidad a crear:</span>
			          <input class="form-control" type="text" name="ccghm" size="4" maxlength="4" value="10">
				  </label>
				
			<div class="p">
				<div class="input_label"> 
					<label for="name"> 
						<span class="input-group-addon">Formato:</span>
				  </label>
			      <select name="ccoudatfmt" class="form-control" data-style="btn-info">
				      <option>CHECKER</option>
				      <option>CSV</option>
				      <option>XML</option>
				      <option>JSON</option>
			      </select>
				
			<span class="input_texto"></span></div>
			<div class="p">
				<div class="input-group-addon"> 
					<label for="name"> 
						<span class="input-group-addon"> Separar por:</span>
					</label>
			      <select name="ccnsp" class="form-control">
				      <option>Ninguno</option>
				      <option>Espacio</option>
				      <option>-</option>
			      </select>
				
			<span class="input_texto"></span></div>
			<div class="p">
				<div class="input-group-addon"> 
					<label for="name"> 
						<span class="goingl ca-icon"> Agregar:</span>
					</label>
			      <span class="input_texts">Fecha
                    <input type="checkbox" name="ccexpdat">
		        </span><span class="input_texts">CCV2
                <input type="checkbox" name="ccvi" readonly>
		        </span><span class="input_texts">Tipo Banco
                <input type="checkbox" name="cctipo" >
		        </span></div>
				
			<input type="hidden" name="tr" size="4" value="1000"/>
			<input type="hidden" name="L" size="2" value="1L"/>
			<br>
			
			<center>	<input type="BUTTON" value="Generar Tarjetas" class="btn btn-info" name="generar" id="generar" onclick="namsogo(document.console.ccp.value,document.console.tr.value);"/> </center>
			
			<br>
			<form id="form2" name="form2" method="post" class="form-horizontal" role="form">
				
					<textarea class="form-control" name="output2" id="output2" rows="15" wrap="VIRTUAL"></textarea>

        
        
        
        <!-- /images friends -->


 
             <!-- /Charts -->



          </div>
        </div>
     <!-- /panel -->
   </div>
   <!-- controls -->

</div>
</div>
<!-- /body -->


<!-- chat -->
        <div id="chat-container" class="col-md-12">

 
            <div class="panel panel-primary">
                <div class="panel-heading" id="chat-item-panel">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <a data-toggle="collapse" data-parent="#chat-item-panel" href="#collapseOne">
                            <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul id="text-content" class="chat">

						<form id="formChat" role="form">
						
							<label for="user">Usuario</label>
							<input type="text" class="form-control" id="user" name="user" placeholder="Ingrese Usuario">


                        <li class="right clearfix">
                          
                               <div id="conversation" style="height:140px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">
                                                          
                              
                            </div>
                        </li>


                    </ul>
                </div>
                <div class="panel-footer">
                <label for="message">Mensaje</label>
							<textarea id="message" name="message" placeholder="Enter Message"  class="form-control" rows="3"></textarea>
              		<button id="send" class="btn btn-primary" >Send</button>						
					</form>
                </div>
            </div>
            </div>




        </div>

<!-- /Generador -->

				<script src="java/ZeroClipboard.js"></script>
				<script>
				$(document).ready(function() {
				  var clip = new ZeroClipboard($("#copy-button"));
					clip.on("ready", function() {
					//debugstr("Todo funciona bien.");
					this.on("aftercopy", function(event) {
						alert("Texto copiado a portapapeles: " + event.data["text/plain"]);
						//debugstr("Texto copiado a portapapeles: " + event.data["text/plain"]);
					});
				  });
				});
				</script>





<!-- /chat -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>		



		<script>
		
			$(document).on("ready", function(){		
				registerMessages();		
				$.ajaxSetup({"cache":false});
				setInterval("loadOldMessages()", 500);
			});
			
				var registerMessages = function(){
					$("#send").on("click", function(e){
						e.preventDefault();
						var frm = $("#formChat").serialize();
						$.ajax({
							type: "POST",
							url: "register.php",
							data: frm
						}).done(function(info){
							var altura = $("#conversation").prop("scrollHeight");
							$("#conversation").scrollTop(altura);
							console.log( info );
						})
					});
				}

				var loadOldMessages = function(){
					$.ajax({
						type: "POST",
						url: "conversation.php"
					}).done(function( info ){
						$("#conversation").html( info );
						$("#conversation p:last-child").css({"background-color": "lightgreen",
															"padding-botton": "20px"});
						var altura = $("#conversation").prop("scrollHeight");
						$("#conversation").scrollTop(altura);
					});
				}

		</script>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.js"></script>
    <script src="js/stack-blur.js"></script>
    <script src="js/saphv2.js"></script>
  </body>
</html>