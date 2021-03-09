<?php

namespace app\widgets;

use yii\base\Widget;


/**
 * @note
 * widget for output of the member of team(s) on the contact page
 *
 * @package app\widgets
 */
class TeamMemberWidget extends Widget
{
    public $image;
    public $imagePath;
    public $title;
    public $position;
    public $description;
    public $socials = [];

    public function run()
    {
        return $this->render('teamMember', [
            'image' => $this->image,
            'imagePath' => $this->imagePath,
            'title' => $this->title,
            'position' => $this->position,
            'description' => $this->description,
            'socials' => $this->socials,
        ]);
    }
}