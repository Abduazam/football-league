<?php

namespace App\Contracts\Enums\Role;

use App\Contracts\Interfaces\Enum\Enumable;

enum RoleEnum : string implements Enumable
{
    case ADMIN = 'admin';
    case ORGANISER = 'organiser';
    case ASSISTANT = 'assistant';
    case PLAYER = 'player';

    /**
     * Return all case values as an array.
     *
     * @return array
     */
    public static function arrayable(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }

    /**
     * Checks does provided value equal to admin.
     *
     * @param string $value
     * @return bool
     */
    public static function isAdmin(string $value): bool
    {
        return $value === self::ADMIN->value;
    }

    /**
     * Checks does provided value equal to organiser.
     *
     * @param string $value
     * @return bool
     */
    public static function isOrganiser(string $value): bool
    {
        return $value === self::ORGANISER->value;
    }

    /**
     * Checks does provided value equal to assistant.
     *
     * @param string $value
     * @return bool
     */
    public static function isAssistant(string $value): bool
    {
        return $value === self::ASSISTANT->value;
    }

    /**
     * Checks does provided value equal to player.
     *
     * @param string $value
     * @return bool
     */
    public static function isPlayer(string $value): bool
    {
        return $value === self::PLAYER->value;
    }
}
