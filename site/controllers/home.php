<?php

return function ($page, $pages) {

  $websites = $pages->listed();
  
  if(param("sort") == "hearts") {
    $websites = $websites->sortBy(function($page) {
      return $page->likeCount();
    }, 'desc');
  }
  elseif(param("sort") == "alpha") {
    $websites = $websites->sortBy(function($page) {
      return preg_replace('#^https?://#', '', $page->content()->url());
    }, 'asc');
  }

  return [
    'websites' => $websites,
    'sort' => param("sort")
  ];

};