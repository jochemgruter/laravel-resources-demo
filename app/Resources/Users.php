<?php

namespace App\Resources;

use App\User;
use Gruter\ResourceViewer\Actions\Action;
use Gruter\ResourceViewer\Fields\Field;
use Gruter\ResourceViewer\Fields\ID;
use Gruter\ResourceViewer\Fields\Text;
use Gruter\ResourceViewer\Filters\Filter;
use Gruter\ResourceViewer\Resource;

class Users extends Resource
{

    public static $model = User::class;

    /**
     * @inheritDoc
     */
    protected function fields()
    {
        return [
            ID::make()
                ->hideOnCreate()
                ->hideOnUpdate(),

            Text::make('name')
                ->rules('required'),

            Text::make('email')
                ->displayUsing(function($value, $model){
                    return $value ?? '-';
                })
                ->rules('required', 'email'),
        ];
    }

    /**
     * @inheritDoc
     */
    protected function filters()
    {
        // TODO: Implement filters() method.
    }

    /**
     * @inheritDoc
     */
    protected function actions()
    {
        // TODO: Implement actions() method.
    }
}
