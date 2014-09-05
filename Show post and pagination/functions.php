<?php

if( !function_exists('pagination'))
{
	/*
	 * $wp_query
	 *	Variable que contiene a todos los post
	 */
	function pagination($wp_query)
	{
		$paginate_arg = array(
		'base'      => str_replace(999999999, '%#%', get_pagenum_link(999999999)), //
		'format'    => 'page=%#%', //
		'total'	    => $wp_query->max_num_pages, // Número de paginaciones
		'current'   => max(1, get_query_var('paged')), // Número de paginacion; la función max devuelve el número mayor del arreglo
		'show_all'  => false, // True: muestra todas las paginaciones
		'end_size'  => 3, // Show 3 
		'mid_size'  => 3, // Show 3
		'prev_next' => True, // Show
		'prev_text' => __('Anterior'), //
		'next_text' => __('Siguiente'), //
		'type'		=> 'plain', //
		'add_args'  => False, 
		'add_fragment'		 => '',
		'before_page_number' => '',
		'after_page_number'  => ''
		);
		
		/*
		 * Se imprime la paginación
		 */
		echo paginate_links($paginate_arg);
		
		/*
		 * Clear wp_query
		 */
		wp_reset_postdata(); 
	}
}


 ?>