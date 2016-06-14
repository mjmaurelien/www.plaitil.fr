<?php
function portfolio_posts_type(){
  $labels_portfolio_post_type_array = array(
            'name'                  =>  __('Oeuvres', 'plaitil'),
            'singular_name'         =>  __('Oeuvres', 'plaitil'),
            'add_new'               =>  __('Ajouter une oeuvre', 'plaitil'),
            'add_new_item'          =>  __('Ajouter une oeuvre', 'plaitil'),
            'edit_item'             =>  __('Editer l\'oeuvre', 'plaitil'),
            'new_item'              =>  __('Nouvelle astuce', 'plaitil'),
            'view_item'             =>  __('Visualiser l\'oeuvre', 'plaitil'),
            'search_items'          =>  __('Rechercher une oeuvre', 'plaitil'),
            'not_found'             =>  __('Aucune oeuvre', 'plaitil'),
            'not_found_in_trash'    =>  __('Aucune oeuvre dans la corbeille', 'plaitil'),
            'parent_item_colon'     =>  __('--', 'plaitil'),
            'menu_name'             =>  __('Oeuvres', 'plaitil')
        );
        $supports_portfolio_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        );
        $rewrite_portfolio_post_type_array = array(
            'slug'          =>  _x('portfolio', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_portfolio_post_type_array = array(
            'labels'                =>  $labels_portfolio_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'plaitil'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  'dashicons-hammer',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_portfolio_post_type_array,
            'rewrite'               =>  $rewrite_portfolio_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('portfolio', $args_portfolio_post_type_array);
        $labels_serie = array(
		'name'              => _x('Catégorie', 'taxonomy general name'),
		'singular_name'     => _x('Catégorie', 'taxonomy singular name'),
		'search_items'      => __('Rechercher une catégorie'),
		'all_items'         => __('Toutes les catégories'),
		'edit_item'         => __('Éditer une catégories'),
		'update_item'       => __('Mettre à jour une catégorie'),
		'add_new_item'      => __('Ajouter une catégorie'),
		'new_item_name'     => __('Nouvelle catégorie'),
		'menu_name'         => __('Catégories'),
    	);
    	// register taxonomy
    	register_taxonomy( 'portfolio', 'portfolio', array(
    		'hierarchical' => true,
    		'labels' => $labels_serie,
    		'query_var' => true,
    		'show_admin_column' => true,
            'rewrite' => 'slug'
    	) );
      }
      add_action('init','portfolio_posts_type', 1);
