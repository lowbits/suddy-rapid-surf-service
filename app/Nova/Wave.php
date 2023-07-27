<?php

namespace App\Nova;

use App\Enums\WaveType;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Wave extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Wave>
     */
    public static $model = \App\Models\Wave::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'type';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'type',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Spots', 'spot'),
            Select::make('Type')->options(array_reduce(
                WaveType::cases(),
                function ($result, WaveType $waveType) {
                    $result[$waveType->value] = $waveType->name;

                    return $result;
                },
                []
            )),
            Number::make('Width')->min(1)->max(100)->step(.5)->nullable(),
            Number::make('Height')->min(1)->max(100)->step(.5)->nullable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
