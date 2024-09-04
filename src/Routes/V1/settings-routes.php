<?php

use Illuminate\Support\Facades\Route;
use Webkul\RestApi\Http\Controllers\V1\Setting\AttributeController;
use Webkul\RestApi\Http\Controllers\V1\Setting\EmailTemplateController;
use Webkul\RestApi\Http\Controllers\V1\Setting\GroupController;
use Webkul\RestApi\Http\Controllers\V1\Setting\PipelineController;
use Webkul\RestApi\Http\Controllers\V1\Setting\RoleController;
use Webkul\RestApi\Http\Controllers\V1\Setting\SourceController;
use Webkul\RestApi\Http\Controllers\V1\Setting\TagController;
use Webkul\RestApi\Http\Controllers\V1\Setting\TypeController;
use Webkul\RestApi\Http\Controllers\V1\Setting\UserController;
use Webkul\RestApi\Http\Controllers\V1\Setting\WebFormController;
use Webkul\RestApi\Http\Controllers\V1\Setting\WorkflowController;
use Webkul\RestApi\Http\Controllers\V1\Setting\LocationController;

Route::group([
    'prefix'     => 'settings',
    'middleware' => 'auth:sanctum',
], function () {
    /**
     * Group routes.
     */
    Route::controller(GroupController::class)->prefix('groups')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show')->where('id', '[0-9]+');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Role routes.
     */
    Route::controller(RoleController::class)->prefix('roles')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show')->where('id', '[0-9]+');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * User routes.
     */
    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show')->where('id', '[0-9]+');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');

        Route::get('search', 'search');

        Route::post('mass-update', 'massUpdate');

        Route::post('mass-destroy', 'massDestroy');
    });

    /**
     * Lead pipeline routes.
     */
    Route::controller(PipelineController::class)->prefix('pipelines')->group(function () {
        Route::get('', 'index');

        Route::get('{id}', 'show');

        Route::post('', 'store');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Lead source routes.
     */
    Route::controller(SourceController::class)->prefix('sources')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Lead type routes.
     */
    Route::controller(TypeController::class)->prefix('types')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Attribute routes.
     */
    Route::controller(AttributeController::class)->prefix('attributes')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');

        Route::post('mass-destroy', 'massDestroy');

        Route::get('lookup/{lookup?}', 'lookup');

        Route::get('lookup-entity/{lookup?}', 'lookupEntity');

        Route::post('mass-update', 'massUpdate');

        Route::get('download', 'download');
    });

    /**
     * Email template routes.
     */
    Route::controller(EmailTemplateController::class)->prefix('email-templates')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Warehouses Location Routes.
     */
    Route::controller(LocationController::class)->prefix('locations')->group(function () {
        Route::get('search', 'search');

        Route::post('', 'store');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Workflow routes.
     */
    Route::controller(WorkflowController::class)->prefix('workflows')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });

    /**
     * Tag routes.
     */
    Route::controller(TagController::class)->prefix('tags')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show')->where('id', '[0-9]+');

        Route::put('{id}', 'update');

        Route::get('search', 'search');

        Route::delete('{id}', 'destroy');

        Route::post('mass-destroy', 'massDestroy');
    });

    /**
     * WebForms routes.
     */
    Route::controller(WebFormController::class)->prefix('web-forms')->group(function () {
        Route::get('', 'index');

        Route::post('', 'store');

        Route::get('{id}', 'show')->where('id', '[0-9]+');

        Route::put('{id}', 'update');

        Route::delete('{id}', 'destroy');
    });
});
