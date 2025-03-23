<?php declare(strict_types=1);

namespace App\Services;

class PresentialSession implements \App\Contracts\Session {
    private int $code;

    public function setCode(int $code): void {
        $this->code = $code;
    }

    public function getCode(): int {
        return $this->code;
    }

    public function showInformation(): void {
        echo '<h1>Presential Session</h1>';
        echo '<p>This will be a presential session</p>';
        echo '<p>Code: ' . $this->code . '</p>';
    }
}
