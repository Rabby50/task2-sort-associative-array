<?php 

            $students = [ 
            ["name" => "Alice", "score" => 88],
             ["name" => "Bob", "score" => 75], 
             ["name" => "Charlie", "score" => 88],
             ["name" => "David", "score" => 91],
             ["name" => "Eve", "score" => 75]
             ];

             echo $students[0]['name'].":".$students[0]["score"].'<br>';
            //  sort($students["score"]);
            // $students_length=count($students);
            
            // echo "<pre>";
            //     print_r($students);
            // echo "</pre>";
            
            usort($students, function($a, $b) {
                if ($a["score"] == $b["score"]) {
                    return strcmp($a["name"], $b["name"]);
                }
                return $a["score"] - $b["score"];
            });
            echo "<pre>";
            print_r($students);
            echo "</pre>";

    ?>
