<?php

declare(strict_types=1);

namespace app\models;

use yii\base\Model;

class Form extends Model
{
    public $name = '';
    public $moodColor = '#0000ff';
    public $comment = '';
    public $radioButton = '';
    public $agreement = false;

    public function rules(): array
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 80],
            [['comment'], 'string', 'max' => 1000],
            [['moodColor'], 'match', 'pattern' => '/^#[0-9a-fA-F]{6}$/'],
            [['radioButton'], 'in', 'range' => ['selected']],
            [['agreement'], 'filter', 'filter' => static fn ($value): bool => (bool) $value],
            [['agreement'], 'boolean'],
            [
                ['agreement'],
                'compare',
                'compareValue' => true,
                'message' => 'Без согласия форма не пройдёт проверку.',
            ],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'name' => 'Имя',
            'moodColor' => 'Цвет вашего настроения',
            'comment' => 'Комментарий',
            'radioButton' => 'А здесь лежит радиобатон',
            'agreement' => 'Согласие',
        ];
    }
}
