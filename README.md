# Todo
Prueba Laravel
composer create-project laravel/laravel todo   
//Crea el modelo y la -m es para crear la migracion
php artisan make:model Pelicula -m

//Ejecutar las migraciones
php artisan migrate
//Estado de  migraciones
php artisan migrate:status
//Regresar una version anterior
php artisan migrate:rollback

//Crear el controlador de Peliculas
php artisan make:controller PeliculasController

#index para mostrar
#strore para guardar
#update para actualizar
#destroy para borrar
#edit para mostrar el formulario de edicion

//Ver lista de rutas
php artisan route:list

php artisan make:model Categoria -m
//Para convertir en recurso y utilizar la logica de Peliculas
php artisan make:controller CategoriesController --resource

//Para crear la relacion
php artisan make:migration categoria_to_peliculas --table:peliculas

 public function up()
    {
        Schema::table('peliculas', function (Blueprint $table) {
           $table->bigInteger('categoria_id')->unsigned();
            $table
            ->foreign('categoria_id')
            ->references('id')
            ->on('categorias')
            ->after('title');
        });
    } y en la migracion agregar esto

hacer 2 rollbacks
