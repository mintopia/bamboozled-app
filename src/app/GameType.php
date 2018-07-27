<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\GameType
 *
 * @property int $id
 * @property string $name
 * @property string $implementation
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Game[] $games
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GameType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GameType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GameType whereImplementation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GameType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\GameType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GameType extends Model
{
    public function games()
    {
        return $this->hasMany(\App\Game::class);
    }
}
