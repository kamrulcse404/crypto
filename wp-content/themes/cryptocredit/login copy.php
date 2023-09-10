<?php  
/**
* Template Name: login page   
**/
 get_header(); ?> 




<div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form>
      <label for="username">Username</label>
      <input type="text" id="username" placeholder="Enter your username">

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password">

      <button class="btn btn-success" type="submit">Login</button>
    </form>
  </div>
</div>
            
              
<?php get_footer(); ?>