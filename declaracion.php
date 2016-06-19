<?php 
	$pretendiente="Bryan";
	$prospecto="Angelina";
	$declaracion="Quieres ser mi novia?";
	$respuesta=".$HTTP_POST_VARS[DecisionAngelina] ";

	echo "Hola $prospecto, desde la primera vez que te vi me encantaron
			tus ojos chinitos :3 y esta ocacion te quiero decir unas palabras
			siii $declaracion";
	echo "Mira $prospecto Quisiera programarme con tus besos,
						   sentir en nuestros labios la interface,
						   ponerle contraseña a tus instintos
						   para que nadie interfiera en el enlace
				espero que te halla gustado? $respuesta me quieres?";
	if ($respuesta=="si") {echo"Yo tambien te quiero mucho y sabes que juntos podemos ser felices"};
	else if ($respuesta=="no") {echo"pues cometi muchos errores, pero aun a si estuviste a mi lado, y siempre te quere por eso :) "};
	else {echo"No te sientas presionada, y creo que a pesar de todo la amistad es lo que cuenta en todo esto, igual contaras con todo mi apoyo"};
?>