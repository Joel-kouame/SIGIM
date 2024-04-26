<?php


    function dateSince($date)
    {


        $date = strtotime($date);

        $temps_ecoule = time() - $date;

        if ($temps_ecoule < 1) {

            return 'à l\'instant';
        }



        $temps = array(

            31556926    => 'an',
            2629743  => 'mois',
            604800      => 'semaine',
            86400       => 'jour',
            3600        => 'heure',
            60          => 'minute',
            1           => 'seconde'

        );





        foreach ($temps as $temps => $value) {


            $div = $temps_ecoule / $temps;

            if ($div >= 1) {

                $time_ego = round($div);

                $time_type = $value;

                if ($time_ego > 1 && $time_type != 'mois') {

                    $time_type .= 's';
                }

                return ' il y a ' . $time_ego . ' ' . $time_type;
            }
        }
    }


    ?>