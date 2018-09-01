<?php


/** 
 * Search form template
 * 
 * 
*/

?>


<div class="d-flex justify-content-center ">

<form role="search" method="get" id="searchform" class="form-inline  searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input value="" name="s" id="s" type="text" class="form-control" placeholder="Search this site" value="<?php (!empty(the_search_query())?the_search_query():"")?>">
        <input id="searchsubmit" value="Search" type="submit" class="btn btn-info">
    </div>
</form>

</div>
