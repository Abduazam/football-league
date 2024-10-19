<?php

namespace App\Providers;

use Filament\Support\Enums\ActionSize;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ViewAction::configureUsing(function (ViewAction $action) {
            return $action->label('View')->button()->size(ActionSize::ExtraSmall);
        });

        EditAction::configureUsing(function (EditAction $action) {
            return $action->label('Edit')->button()->size(ActionSize::ExtraSmall);
        });

        DeleteAction::configureUsing(function (DeleteAction $action) {
            return $action->label('Delete')->button()->size(ActionSize::ExtraSmall);
        });

        ForceDeleteAction::configureUsing(function (ForceDeleteAction $action) {
            return $action->label('Destroy')->button()->size(ActionSize::ExtraSmall);
        });

        RestoreAction::configureUsing(function (RestoreAction $action) {
            return $action->label('Restore')->button()->size(ActionSize::ExtraSmall);
        });
    }
}
