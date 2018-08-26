<?php 


/* Collection of  Walker classes */



class Walker_Nav_Primary extends Walker_Nav_menu {


    function start_lvl(&$output, $depth = 0, $args = array()){ //ul
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? ' submenu':'';

        $output .= "\n$indent<ul class=\"submenu-dropdown depth_$depth\">\n";

    }

    function start_el(&$output, $item, $depth = 0 , $args = array(), $id = 0){ //li a span
            $indent = ($depth) ? str_repeat("\t", $depth): '';
            $li_attributes ='';
            $class_names = $value = '';

            $classes = empty($item->classes)? array() : $item->classes;
            $classes[] = ($args->walker->has_children)? 'submenu' : '';

            $classes[] = ($item->current  || $item->current_item_ancestor) ? 'active':'';

            $classes[] ='menu-item-' .$item->ID;

        //    if($depth && $args->walker->has_children) {
        //        $classes[] = 'submenu-dropdown';
        //    } 

           $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item ,  $args)  );

           $class_names = 'class="'. esc_attr($class_names). '"';

           $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
           $id = strlen($id) ? 'id="'.esc_attr($id) .'"': '';

           $output .= $indent . '<li ' .$id . $value . $class_names . $li_attributes .'>';

           $attributes = !empty($item->attr_title)? 'title="'. esc_attr($item->attr_title).'"':'';
           $attributes .= !empty($item->target)? 'target="'. esc_attr($item->target).'"':'';
           $attributes .= !empty($item->xfn)? 'rel="'. esc_attr($item->xfn).'"':'';
           $attributes .= !empty($item->url)? 'href="'. esc_attr($item->url).'"':'';


           $attributes .= ($args->walker->has_children)? ' class="submenu-toggle dropdown-toggle"':' class=""';


           $item_output = $args->before;
           $item_output .= '<a '.$attributes.'>';
           $item_output .=$args->link_before . apply_filters('the_title', $item->title , $item->ID). $args->link_after;
           $item_output .= ($depth == 0 && $args->walker->has_children) ? '<span class="c"></span></a>':'</a>';

           $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output ,$item , $depth, $attributes );

           


            

     }
    // function end_el(){

    // }

    // function end_lvl(){

    // }
}

class Walker_Nav_Single_Page_Primary extends Walker_Nav_menu{
    function start_lvl(&$output, $depth = 0, $args = array()){ //ul
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? ' submenu':'';

        $output .= "\n$indent<ul class=\"dropdown-menu depth_$depth\" aria-labelledby=\"dropdown_$depth\">\n";

    }

    function start_el(&$output, $item, $depth = 0 , $args = array(), $id = 0){ //li a span
            $indent = ($depth) ? str_repeat("\t", $depth): '';
            $li_attributes ='';
            $class_names = $value = '';

            $classes = empty($item->classes)? array() : $item->classes;
            $classes[] = ($args->walker->has_children)? 'nav-item dropdown' : 'nav-item';

            $classes[] = ($item->current  || $item->current_item_ancestor) ? '':'';

            $classes[] ='menu-item-' .$item->ID;


           $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item ,  $args)  );

           $class_names = 'class="'. esc_attr($class_names). '"';

           $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
           $id = strlen($id) ? 'id="'.esc_attr($id) .'"': '';

           $output .= $indent . '<li ' .$id . $value . $class_names . $li_attributes .'>';

           $attributes = !empty($item->attr_title)? 'title="'. esc_attr($item->attr_title).'"':'';
           $attributes .= !empty($item->target)? 'target="'. esc_attr($item->target).'"':'';
           $attributes .= !empty($item->xfn)? 'rel="'. esc_attr($item->xfn).'"':'';
           $attributes .= !empty($item->url)? 'href="'. esc_attr($item->url).'"':'';


           $attributes .= ($args->walker->has_children)? ' class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdown_'.$depth.'"':' class="nav-link"';


           $item_output = $args->before;
           $item_output .= '<a '.$attributes.'>';
           $item_output .=$args->link_before . apply_filters('the_title', $item->title , $item->ID). $args->link_after;
           $item_output .= '</a>';

           $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output ,$item , $depth, $attributes );

           


            

     }
}


