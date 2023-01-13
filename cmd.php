Arrumar a parte dos usuários editar quando buscar a macro buscar somente os
hospais daquela macro.


php artisan migrate:reset

php artisan make:seeder PermissionTableSeeder

php artisan db:seed --class=PermissionTableSeeder

php artisan make:seeder CreateAdminUserSeeder

php artisan db:seed --class=CreateAdminUserSeeder

Criar uma Model e Migrations
php artisan make:model nome da Model -m


Criar um Controller
php artisan make:controller PostController --resource
php artisan make:controller ManualController --resource

Criando um modulo
https://www.diegobrocanelli.com.br/php/laravel-module/


Criando a autenticação toda.
https://medium.com/@tm.talhamaqsood18/simple-authentication-in-laravel-8-9-0-step-by-step-with-images-a63149679f2b


Exportar CSV e EXCEL
<li><a class="nav-link" href="{{ url('https://websolutionstuff.com/post/laravel-8-import-export-csv-excel-file-example
') }}">Exportar CSV</a></li>


Mapas dos Layouts

Layouts         Principal

Layouts 3       Solicitante

Layouts 4       Administrador


php artisan make:model incluir_mapa_p2 -m       --

php artisan make:controller admController --resource


---------------------------------------------------------------------------
eloquent com dois where

$itensP = Pacientes::select("*")
->where([
["label", "=", 1],
["macro", "=", "$m"]
])->get();
?>

----------------------------------------------------------------------------
eloquent pra todos os dados da tabela com all().
eloquent para utilizar where   no where macro = id;

<?php
 use App\Models\Categoria;
 $tabela = categoria::all();
 $itensP = categoria::where('macro',$id)->get(); ?>
  ?>
----------------------------------------------------------------------------
Passagem de Paramero direto view

botão ou link
<a href="{{ route('users.create', ['id' => $item->id]) }}">Próxima Etapa</a>

pega na view com php
<?php
$id=$_GET['id'];
echo $id;
?>
-----------------------------------------------------------------------------


