<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="../images/icon-lazy.png">
    <title>FaQ</title>
</head>

<body>
    <header>
        <nav class="navbarpreg">
            <div class="iconospreg">

                <a href="{{ url('/') }}"> <img class="logopreg" src="images/icon-lazy.png" alt=""></a>

                <ul class="listanav">
                    <li class="linkpreg1"><a href="#">Centro de ayuda</a></li>
                    <li class="linkpreg2"><a href="#">Comunicate</a></li>
                    <li class="linkpreg3"><a href="#">Guias</a></li>
                </ul>
                <form class="" action="#" method="get">
                    <input type="text" name="buscar" class="buscar-p" placeholder="Busqueda">
                </form>
                <a class="botoninic-p" href="{{ url('/login') }}">Inicia sesión</a>
            </div>
        </nav>
    </header>
    <br>
    <section>
        <h1 class="titufrec">Preguntas frecuentes para usuarios nuevos</h1>
        <div class="cajafrec">


            <article class="frecuente1">
                <h1>Sloth</h1>
                <h3>¿Qué es Sloth?</h3>
                <p>Sloth es una red social que permite subir contenido referido a mascotas y sus dueños. Las personas publican fotos, videos y/o texto. Estas publicaciones se añaden al perfil de cada usuario y pueden ser vistas allí mismo o en la
                    página de inicio por sus seguidores al momento de ser compartida. </p>
            </article>

            <article class="frecuente1">
                <h3>¿Necesito algo en especial para usar Sloth?</h3>
                <p>Todo lo que necesitas para usar Sloth es una conexión a internet o un teléfono móvil. ¡Únete a nosotros! Una vez que te hayas registrado, podrás comenzar a buscar y a seguir cuentas cuyas publicaciones te interesen. Y nosotros
                    también te recomendaremos cuentas estupendas que te pueden gustar.</p>
            </article>

            <article class="frecuente1">
                <h3>¿Que es un slot?</h3>
                <p>Un slot es el perfil de cada usuario, en donde puede ver su imagen de perfil,su nombre de usuario y sus publicaciones que quedaran registradas en orden cronológico.
                    Tu slot es tu lugar, tu espacio personal, llenalo con el contenido que mas desees!.</p>
            </article>

            <article class="frecuente1">
                <h3>¿Cómo publico una foto?</h3>
                <p>Es muy fácil subir y compartir imágenes en Sloth. Consulta las instrucciones paso a paso y las preguntas frecuentes sobre </p><a href="#">cómo publicar una imagen en Sloth</a>.
            </article>

            <article class="frecuente1">
                <h3>¿Quiénes ven mis publicaciones?</h3>
                <p>Tus seguidores pueden ver tus publicaciones. Si tus publicaciones son públicas, cualquier persona que busque tu perfil podrá verlas. Los slot son públicos de forma predeterminada. Si tienes dudas sobre la posibilidad de que
                    personas desconocidas vean tu perfil,visita </p><a href="#">privacidad del perfil</a>.
            </article>
            <article class="frecuente1">
                <h1>Seguir</h1>
                <h3>¿Qué significa seguir a alguien?</h3>
                <p>Seguir a alguien significa que elegiste suscribirte a sus actualizaciones en Sloth. Cuando sigues a alguien, cada vez que esa persona publica un contenido nuevo, este aparece en tu cronología de inicio de Sloth.</p>
            </article>
            <article class="frecuente1">
                <h3>¿Cómo encuentro personas a seguir?</h3>
                <p>Cuando creas una cuenta, puedes buscar personas o mascotas por su nombre de usuario, importar amigos de otras redes sociales o invitarlos.</p>
            </article>
            <article class="frecuente1">
                <h3>¿Cómo se a quien estoy siguiendo?</h3>
                <p>Cuando pulsas o haces clic en Seguir que aparece en el slot de una persona, empiezas a seguirla. Para ver la lista de personas que sigues, haz clic en el vínculo Siguiendo que aparece en tu slot. </p>
            </article>
            <article class="frecuente1">
                <h3>¿Cómo se quién me sigue?</h3>
                <p>Sloth te envía una notificación cada vez que alguien comienza a seguirte. El enlace Seguidores que aparece en tu slot también te muestras quiénes te siguen. </p>
            </article>
            <article class="frecuente1">
                <h1>Comentarios</h1>
                <h3>¿Qué son los comentarios?</h3>
                <p>Los comentarios se utilizan para responder la publicacion de otra persona, pulsa o haz clic en la caja de comentarios para hacerlo.</p>
            </article>
            <article class="frecuente1">
                <h1>Mensajes</h1>
                <h3>¿Qué son los mensajes?</h3>
                <p> Los mensajes son mensajes privados enviados desde una cuenta de Sloth a otras cuentas de Sloth. Estos mensajes no aparecen en lugares públicos donde los puedan leer otras personas. Puedes iniciar una conversación con cualquier
                    usuario.</p>
            </article>

            <article class="frecuente1">
                <h1>Politicas y denuncias</h1>
                <h3>¿Por qué se suspenden las cuentas?</h3>
                <p>Las cuentas se suspenden por incumplimientos de los </p> <a href="#">Términos de servicio</a>.<p>Obten mas informacion sobre el </p><a href="#">bloqueo de cuentas</a>.
            </article>

            <article class="frecuente1">
                <h3>¿Cómo puedo denunciar?</h3>
                <p>Consulta nuestro articulo sobre como </p> <a href="#">denunciar una cuenta en Sloth </a>
                <p>También te recomendamos que bloquees las cuentas que envian spam o contenido incorrecto.</p>
            </article>
            <article class="frecuente1">
                <h3>¿Dónde encuentro mas información sobre los Terminos de servicio?</h3>
                <p>Consulta los </p><a href="#">Términos de servicio </a>
                <p>de Sloth y las</p> <a href="#">Reglas de Sloth</a>
                <p> para obtener más información.</p>
            </article>
        </div>
    </section>
    <footer>
        <ul class="foot">
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Legales</a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Privacidad</a></li>

        </ul>
    </footer>
</body>

</html>
