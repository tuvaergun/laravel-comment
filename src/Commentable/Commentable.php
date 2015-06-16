<?php namespace Tuva\Commentable;

trait Commentable
{
    /**
     * This model has many comments.
     *
     * @return Comment
     */
    public function comments()
    {
        return $this->morphMany('Tuva\Commentable\Comment', 'commentable');
    }
}
