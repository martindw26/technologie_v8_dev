<!-###### Long Rating ######->

                                      <?php $rating = get_field('review_rating');
                            switch ($rating) {
                              case "0":
                                echo '<style>div#rating_category { display:none;}</style>';
                                break;
                              case "1":
                                    echo '<div id="rating_statement"><h5 class="text-dark"><p class="dashicons dashicons-awards"></p> Rating - Below average <br>';
                                for ($rating = 0; $x <= 1; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                    echo '</h5></div>';
                                break;
                              case "2":
                                    echo '<div id="rating_statement"><h5 class="text-dark"><p class="dashicons dashicons-awards"></p> Average <br>';
                                for ($rating = 0; $x <= 2; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                    echo '</h5></div>';
                                break;
                              case "3":
                                    echo '<div id="rating_statement"><h5 class="text-dark"><p class="dashicons dashicons-awards"></p> Above average <br>';
                                for ($rating = 0; $x <= 3; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                    echo '</h5></div>';
                                break;
                                    case "4":
                                    echo '<div id="rating_statement"><h5 class="text-dark"><p class="dashicons dashicons-awards"></p> Recommended <br>';
                                for ($rating = 0; $x <= 3; $x++) {
                                    echo "<span class='text-dark dashicons dashicons-star-filled'></span>";
                                    }
                                    echo '</h5></div>';
                                break;
                              case "5":
                                    echo '<div id="rating_statement"><h5 class="text-dark"><p class="dashicons dashicons-awards"></p> Rating - Highly recommended <br>';
                                for ($rating = 0; $x <= 4; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                    echo '</h5></div>';
                                break;
                             default:
                                echo '<style>div#rating_category { display:none;}</style>';
                      }
                      ?>