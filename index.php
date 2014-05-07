<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>We are SHS</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
	<?php
	$year =  date('Y');
	?>
  </head>
  <body>
 <nav class="top-bar" data-topbar>
 <ul class="title-area">
    <li class="name">
      <h1><a href="http://shs.d211.org" title="Home Page"><img src="media/SHS logo.png" width="49" height="45">Schaumburg H.S.</a></h1>
        </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul> 

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
       <li><a>Welcome, Ana Estrada</a></li>
      <li class="active"> <a>Sign out</a></li>
      <li class="has-dropdown">
        <a href="#">Right Button Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li><a href="#">second link in dropdown</a></li>
        </ul>
      </li>
    </ul> 

    <!-- Left Nav Section -->
  <!--<ul class="left">
      <li><a href="#">Menu</a></li>
    </ul>  -->
  </section>
</nav>



  <div class="row">
  
   <div class="small-12 column">
    <ul class="breadcrumbs">
  		<li><a href="#">Home</a></li>
	  	<li><a href="#">Parent</a></li>
	  	<li class="unavailable"><a href="#">Child</a></li>
	    <li class="current"><a href="#">Current Page</a></li>
	 </ul>
   </div>  
  </div>
    
  <div class="row">
  
   <div class="small-12 columns"><h2>Page Title</h2><h3><small>Page Description</small></h3></div>
   <div data-alert class="small-12 columns alert-box success radius"><a href="#" class="close">&times;</a></div>
   <div class="small-12 columns">
    <form>
  <fieldset>
    <legend>Logon</legend>

    <div class="small-12 medium-4 column">
      <input type="text" placeholder="Enter you D211 username" id="username" name="username">
    </div>
    <div class="small-12 medium-4 column">
    
      <input type="text" placeholder="Enter you D211 password" id="password" name="password">
    </div>
    <div class="small-12 medium-4 column">
         <input type="submit" id="logonsubmit" id="logonsubmit" class="button"/>
    </label></div>
  </fieldset>
</form>
   </div>
   <div class="small-6 emptybodybox columns "><p>A Fremd High School sophomore is celebrating the success of stories she submitted for the 2014 Scholastic Writing Awards, a prestigious program for creative young artists and writers.

Annie Zheng earned both regional and national recognitions in the 2014 Scholastic Writing Awards. The Chicago Region awards, which are provided by the Chicago Area Writing Project, awarded her Gold Keys in Flash Fiction and Short Story categories, and a Silver Key in Poetry. Additionally, her short story titled “Lost & Found,” was given a silver medal at the national level.

“Every year I have submitted, I made it to the national level but never got an award,” Annie said. “This year I was really happy when I did. It was really nice. I started writing “Lost & Found,” during the summer at a creative writing camp, and I got a lot of feedback from other writers in the class and my teacher. That helped me get to the national level.”</p></div>
   <div class="small-6 emptybodybox columns "><p>Annie’s Flash Fiction piece “Finding God Through The Dogs” was also nominated for an American Voices Award (AVA) for being one of the top five pieces in the Chicago regional competition. The regional Scholastic Writing Award winners were recognized at an award ceremony at University of Illinois Chicago and national recognitions will take place in June at Carnegie Hall in New York.

Each year, teens in grades 7 through 12 can apply in 28 categories of art and writing for the chance to earn scholarships and have their works exhibited or published. Submissions are juried by luminaries in the visual and literary arts, some of whom are past award recipients. Panelists look for works that best exemplify originality, technical skill and the emergence of a personal voice or vision.</p></div>
  </div> 
    
    

 <div id="footer" class="text-center">
   <h4><small>"Focused on student learning and personal accountability, the Schaumburg High School community is dedicated to fostering a respectful, committed, and collaborative environment to maximize student success"</small></h4>
  
    <h6><small>1100 West Schaumburg Road Schaumburg, IL 60194 (847)755-4600. Copyright 1995-<?php echo $year; ?>. All rights reserved.</small></h6>
  </div>
 

<script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
