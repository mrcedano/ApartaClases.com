<?php declare(strict_types=1);

namespace App\Contracts;

interface Session {
    public function setCode(int $code): void;
    public function getCode(): int;
    public function showInformation(): void;
}
