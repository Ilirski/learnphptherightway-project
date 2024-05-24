<?php

declare(strict_types=1);

namespace App\Models;

class Transaction extends Model
{
    public function create(\DateTimeImmutable $date, int $check, string $description, int $amount): void
    {
        $stmt = $this->db->prepare(
            'INSERT INTO transaction (date, check_ref, description, amount)
             VALUES (?, ?, ?, ?)'
        );

        $stmt->execute([$date, $check, $description, $amount]);
    }
}
