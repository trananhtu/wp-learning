<form action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">

        <input type="text" class="form-control" value="" name="s" id="s" placeholder="<?php echo get_search_query() == "" ? "Search for..." : get_search_query(); ?>">

        <span class="input-group-btn">
            <button id="searchsubmit" class="btn btn-secondary" type="button">Search</button>
        </span>

    </div>
</form>