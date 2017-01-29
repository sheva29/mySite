<?php 
  $args = array(
    'parent' => 9,
    'include' => array(12, 6, 8, 7)
   );
   $terms = get_terms('category', $args);

?> 


<?php 
   echo "<nav id='sidebar' class='project-sidebar'>";
   foreach($terms as $term){
     ?>
       <div class="filter-container">
         <div class="filter-logo"></div>
       <?php
       echo "<button class='project-sidebar-elements' data-filter='.".$term->slug."'>" . strtolower($term->name) . "</button>\n"; 
?>
     </div>
<?php
   } 
   echo "</nav>"; 
?>
