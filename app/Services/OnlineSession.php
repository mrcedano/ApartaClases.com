<?php

namespace App\Services;

class OnlineSession implements \App\Contracts\Session {
    private int $code;

    public function setCode(int $code): void {
        $this->code = $code;
    }

    public function getCode(): int {
        return $this->code;
    }

    public function showInformation(): void {
        echo '<h1>Online Session</h1>';
        echo '<p>This will be an online session</p>';
        echo '<p>Code: ' . $this->code . '</p>';
    }
}
