<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $accounts = config('initial_accounts');
        $passwords = array_column($accounts, 'password');
        $emails = array_column($accounts, 'email');

        if (count($accounts) !== 4
            || count(array_unique($emails)) !== 4
            || count(array_unique($passwords)) !== 4
            || collect($accounts)->contains(fn (array $account) => blank($account['password']) || strlen($account['password']) < 12)) {
            throw new \RuntimeException(
                'Configure four unique emails and four unique passwords of at least 12 characters in .env before running db:seed. See README.md.',
            );
        }

        foreach ($accounts as $account) {
            User::updateOrCreate(
                ['email' => $account['email']],
                [
                    'name' => $account['name'],
                    'password' => Hash::make($account['password']),
                    'role' => $account['role'],
                    'is_active' => true,
                ],
            );
        }
    }
}
