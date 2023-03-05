<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : ?string{ //debe retornar especificamente un string con el :string y void es para cuando queremos imprimir lo que sea y si le pones un signo de pregunta antes es como opcional tambien se puede usar un ó como string | int
    if($autenticado):
        return 'Usuario autenticado';
        //echo 'Usuário autenticado';
    else :
        return null;
        //echo 'Usuário no autenticado';
    endif;
}

$usuario = usuarioAutenticado(true);
echo $usuario;

include 'includes/footer.php';