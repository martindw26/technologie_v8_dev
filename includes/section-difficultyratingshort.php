	         <?php $rating = get_field('project_difficulty_rating');
                            switch ($rating) {
                               case "multi":
                                echo '<div id="rating_statement_difficulty"><p> See article </p></div>';
                                break;
	             case "0":
                                echo '<style>div#rating_category { display:none;}</style>';
                                break;
                              case "1":
                                echo '<div id="rating_statement_difficulty"><p><p class="dashicons dashicons-hammer"></p> Easy </p></div>';
                                break;
                              case "2":
                                echo '<div id="rating_statement_difficulty"><p><p class="dashicons dashicons-hammer"></p> Easy / Intermediate</p></div>';
                                break;
                              case "3":
                                echo '<div id="rating_statement_difficulty"><p><p class="dashicons dashicons-hammer"></p> Intermediate / Difficult</p></div>';
                                break;
                              case "4":
                                echo '<div id="rating_statement_difficulty fs-5 text"><p><p class="dashicons dashicons-hammer fs-5 text"></p> Difficult</p></div>';                                
                                break;
                         	  case "5":
                                echo '<div id="rating_statement_difficulty"><p><p class="dashicons dashicons-hammer"></p> Very Difficult</p></div>';
                                break;
                             default:
                                echo '<style>div#rating_category { display:none;}</style>';
                        }
                        ?> 