<?php

namespace App\Libraries;

class Maintenance
{
    protected string $file;

    public function __construct()
    {
        $this->file = WRITEPATH . 'maintenance.json';
    }

    public function enable(string $message = '', array $allowedIps = [], ?string $secret = null, int $retryAfter = 600): void
    {
        file_put_contents($this->file, json_encode([
            'message'     => $message ?: 'We are performing maintenance. Please check back soon.',
            'allowed_ips' => $allowedIps,
            'secret'      => $secret,
            'retry_after' => $retryAfter,
            'time'        => date('c'),
        ], JSON_PRETTY_PRINT));
    }

    public function disable(): void
    {
        if (is_file($this->file)) {
            unlink($this->file);
        }
    }

    public function isActive(): bool
    {
        return is_file($this->file);
    }

    public function data(): array
    {
        return $this->isActive()
            ? (json_decode(file_get_contents($this->file), true) ?? [])
            : [];
    }
}
