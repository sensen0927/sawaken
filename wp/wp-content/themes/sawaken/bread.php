<?php
if(function_exists('bcn_display'))
  {
   echo '
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">';
   bcn_display();
   echo '</div>
 
';
  }