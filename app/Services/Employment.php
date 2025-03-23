<?php

namespace App\Services;

use \Facades\App\Services\OnlineSession;

class Employment {

    public function searchEmploymentById(int $id, ) {
        $employees = [
            1 => ['Oscar Cedano'],
            2 => ['Roberto Rodriguez'],
            3 => ['Maria Zamoran']
        ];
    }

    public function showSessionAsHTML() {
        echo '<p>Showing session information as HTML</p>';

        OnlineSession::showInformation();
    }

}

