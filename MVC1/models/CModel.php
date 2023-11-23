<?php

class Cmodel {
    public function getData(){
        $mysqli = new mysqli('localhost', 'root', '', 'php21');

        if(mysqli_connect_errno()) {
            echo 'Connection is not installed';
            exit();
        }

        $mysqli->set_charset('utf-8');

        $query = "Select * From News";

        $result = $mysqli->query($query);

        if (!$result) {
            echo 'Ошибка в запросе: ' . $mysqli->error;
            exit();
        }

        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        $mysqli->close();

        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site',
            'DATE' => '22.06.2020',
            'AUTHOR' => 'Jakovlev',
            'IMAGE' => 'https://images.saymedia-content.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:eco%2Cw_1200/MTk2NzY3MjA5ODc0MjY5ODI2/top-10-cutest-cat-photos-of-all-time.jpg',
            'TEXT' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices mi tempus imperdiet nulla malesuada.'
        );
        $arrayResult[] = array(
            'TITLE' => 'Blog hosting site NEW',
            'DATE' => '21.07.2021',
            'AUTHOR' => 'Jegor',
            'IMAGE' => 'https://images.saymedia-content.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:eco%2Cw_1200/MTk2NzY3MjA5ODc0MjY5ODI2/top-10-cutest-cat-photos-of-all-time.jpg',
            'TEXT' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices mi tempus imperdiet nulla malesuada.'
        );
        return $arrayResult;
    }
}