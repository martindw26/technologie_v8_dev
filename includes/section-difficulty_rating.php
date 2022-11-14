	<?php $rating = get_field('project_difficulty_rating');
                            switch ($rating) {
	             case "0":
                                echo '<style>div#rating_category { display:none;}</style>';
                                break;
                              case "1":
                                echo '<div id="rating_statement"><h5> Project difficulty rating:  Easy </h5></div>';
                                break;
                              case "2":
                                echo '<div id="rating_statement"><h5> Project difficulty rating:  Easy / Intermediate</h5></div>';
                                break;
                              case "3":
                                echo '<div id="rating_statement"><h5> Project difficulty rating:  Intermediate / Difficult</h5></div>';
                                break;
                              case "4":
                                echo '<div id="rating_statement"><h5> Project difficulty rating:  Difficult</h5></div>';                                
                                break;
                         	  case "5":
                                echo '<div id="rating_statement"><h5> Project difficulty rating:  Very Difficult</h5></div>';
                                break;
                             default:
                                echo '<style>div#rating_category { display:none;}</style>';
                        }
                        ?> 