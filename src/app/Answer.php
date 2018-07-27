<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Answer
 *
 * @property int $id
 * @property int $question_id
 * @property int $position
 * @property string $answer
 * @property int|null $next_question_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Question|null $next_question
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Player[] $players
 * @property-read \App\Question $question
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer whereNextQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Answer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Answer extends Model
{

    public function question()
    {
        return $this->belongsTo(\App\Question::class);
    }

    public function players()
    {
        return $this->belongsToMany(\App\Player::class)->withTimestamps();
    }
    
    public function next_question()
    {
        return $this->belongsTo(\App\Question::class, 'next_question_id');
    }
}
