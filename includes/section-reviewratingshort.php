                    <?php $rating = get_field('review_rating');
                            switch ($rating) {
                              case "multi":
                                echo '<div id="rating_statement_review"><p>Rating: See article </p></div>';
                                break;
                              case "1":
                                echo "<span class='bi bi-star-fill text-warning  p-1'></span>";
                                break;
                              case "2":
                                    for ($rating = 0; $x <= 1; $x++) {
                                    echo "<span class='bi bi-star-fill text-warning p-1'></span>";
                                    }
                                break;
                              case "3":
                                for ($rating = 0; $x <= 2; $x++) {
                                    echo "<span class='bi bi-star-fill text-warning p-1'></span>";
                                    }
                                 
                                break;
                              case "4":
                                for ($rating = 0; $x <= 3; $x++) {
                                    echo "<span class='bi bi-star-fill text-warning p-1'></span>";
                                    }
                                break;
                             case "5":
                                for ($rating = 0; $x <= 4; $x++) {
                                  echo "<span class='bi bi-star-fill text-warning p-1'></span>";
                                    }
                                break;
  	                          case "6":
                                for ($rating = 0; $x <= 5; $x++) {
                                  echo '<style>{ display:none;}</style>';
                                    }
                                break;

                             default:
                                echo "Rating not yet availble";
                      }
                      ?>