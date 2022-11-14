<?php 
$catarray = get_the_category( $post->ID );
foreach ($catarray as $cat) {
    $catid = $cat->term_id;

    if ($catid == 2) {
                         <?php $rating = get_field('rating');
                            switch ($rating) {
                              case "1":
                                echo "<span class='dashicons dashicons-star-filled'></span>";
                                break;
                              case "2":
                                    for ($rating = 0; $x <= 1; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                break;
                              case "3":
                                for ($rating = 0; $x <= 2; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                 
                                break;
                              case "4":
                                for ($rating = 0; $x <= 3; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                break;
                             case "5":
                                for ($rating = 0; $x <= 4; $x++) {
                                    echo "<span class='dashicons dashicons-star-filled'></span>";
                                    }
                                break;
                             default:
                                echo "Rating not yet availble";
                      }
                      ?>    }
    if ($catid == 3) {
                            <?php $rating = get_field('rating');
                            switch ($rating) {
                              case "1":
                                echo '<div id="rating_statement"><h3>Easy </h3></div><br>';
                                break;
                              case "2":
                                echo '<div id="rating_statement"><h3>Easy / Intermediate</h3></div><br>';
                                break;
                              case "3":
                                echo '<div id="rating_statement"><h3>Intermediate / Difficult</h3></div><br>';
                                break;
                              case "4":
                                  echo '<div id="rating_statement"><h3>Difficult</h3></div><br>';
                                break;
                             case "5":
                                 echo '<div id="rating_statement"><h3>Project difficulty:  Very Difficult</h3></div><br>';
                                break;
                             default:
                                echo "Rating not yet availble";
                      }
                      ?>
    }

}
?>