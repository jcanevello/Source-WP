<?php 
/*
 * 	$paged
 *	 Indica la paginación actual
 */
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


/*
 * 	$arg
 *	 Variable que contiene las condiciones de la consulta
 *	 Se debe de pasar la variable $paged para obtener los post de la paginación
 */
$arg = array(
	'paged' => $paged
	);


/*
 * 	$wp_query
 *	 Variable que contiene a todos los post
 */

$wp_query = new WP_Query($arg);

/*
 * Se realiza el loop de los post
 */

if($wp_query->have_posts())
{
	while($wp_query->have_posts())
	{
		$wp_query->have_posts();
		echo the_title();
	}
}
//-Termina Loop-//

/*
	Llamamos a la función pagination
*/
pagination($wp_query);

?>