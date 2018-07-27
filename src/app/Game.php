<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Game
 *
 * @property int $id
 * @property int $account_id
 * @property int $game_type_id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Account $account
 * @property-read \App\GameType $gametype
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Player[] $players
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Question[] $questions
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereGameTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Game whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Game extends Model
{
    public function account()
    {
        return $this->belongsTo(\App\Account::class);
    }
    
    public function gametype()
    {
        return $this->belongsTo(\App\GameType::class);
    }
    
    public function players()
    {
        return $this->hasMany(\App\Player::class);
    }
    
    public function questions()
    {
        return $this->hasMany(\App\Question::class);
    }
}
