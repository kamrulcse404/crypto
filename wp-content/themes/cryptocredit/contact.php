<?php

/**
 * Template Name: Contact Template 
 **/
get_header(); ?>


<br>
<br>

<br>


<br>
<br>
<br>


<h2> <?php the_title(); ?> </h2>

<p> <?php the_content(); ?> </p>




<br>
<br>
<h2> Create Data </h2>
<br>
<form action="#" id="woo_mifrate_create_data" enctype="multipart/form-data">

  <div class="form-group">
    <label for="name">Website:</label>
    <input type="text" class="form-control" id="website" name="website">
  </div>

  <div class="form-group">
    <label for="designation">Api url :</label>
    <input type="text" class="form-control" id="api_url" name="api_url">
  </div>


  <div class="form-group">
    <label for="father">Api consumer key:</label>
    <input type="text" class="form-control" id="consumer_key" name="consumer_key">
  </div>


  <div class="form-group">
    <label for="mother">Api consumer secret:</label>
    <input type="text" class="form-control" id="consumer_secret" name="consumer_secret">
  </div>

  <button type="submit" class="btn btn-primary manual_submit">Submit</button>


</form>

<?php get_footer(); ?>