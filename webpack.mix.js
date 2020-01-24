let mix = require( 'laravel-mix' );

mix.sass( 'resources/sass/welcome/style.scss' , 'public/css/welcome/' );
mix.sass( 'resources/sass/navigation/style.scss' , 'public/css/navigation/' );
mix.sass( 'resources/sass/form/style.scss', 'public/css/form/' )