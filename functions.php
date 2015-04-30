<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}

/*******************************
Update the login image page
********************************/
function my_custom_login_logo() {
echo '<style type="text/css">
	body.login div#login h1 a {

		background-image: url(/your-path/file.png);
		width: 100px;
		-webkit-background-size: 100px 74px;
		background-size: 100px 74px;
	}
</style>';
}

add_action('login_head', 'my_custom_login_logo');

//Link na tela de login para a página inicial 
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
function my_login_logo_url_title() {
    return 'Website Title Here';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

//Colocar função que reconhece Imagem Destacada nos posts

 
?>