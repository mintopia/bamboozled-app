<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Player
 *
 * @property int $id
 * @property int $game_id
 * @property string $external_id
 * @property string $name
 * @property int $score
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Answer[] $answers
 * @property-read \App\Game $game
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereExternalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Player whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Player extends Model
{
    public function game()
    {
        return $this->belongsTo(\App\Game::class);
    }
    
    public function answers()
    {
        return $this->belongsToMany(\App\Answer::class)->withTimestamps();
    }
}
