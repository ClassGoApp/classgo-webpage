<?php
use Illuminate\Support\Facades\Route;
use Amentotech\LaraGuppy\Http\Controllers\ChatActionsController;
use Amentotech\LaraGuppy\Http\Controllers\FriendsController;
use Amentotech\LaraGuppy\Http\Controllers\MessageController;
use Amentotech\LaraGuppy\Http\Controllers\ProfileController;
use Amentotech\LaraGuppy\Http\Controllers\ThreadsController;
use Amentotech\LaraGuppy\Http\Middleware\UserOnline;
use Amentotech\LaraGuppy\Services\ThreadsService;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routes = Route::controller(ChatActionsController::class);

if( !empty(config('laraguppy.url_prefix')) ){
    $routes = $routes->prefix(config('laraguppy.url_prefix'));
}

if( !empty(config('laraguppy.route_middleware')) ){
    $routes = $routes->middleware(config('laraguppy.route_middleware'));
}

$routes->group( function () {
    Route::get('messenger', 'index')->name('laraguppy.messenger');
});

$middlewares = config('laraguppy.api_authentication_middleware') ?? ['auth:sanctum'];
$middlewares[] = UserOnline::class;

Route::prefix('api')->middleware($middlewares)->group(function () {
    Route::get('/chatapp-settings', [ProfileController::class, 'settings'])->middleware(['auth'])->name('chatapp-settings');

    Route::get('/contacts', [ProfileController::class, 'contacts']);
    Route::get('/friend-requests', [FriendsController::class, 'requests']);
    Route::get('/blocked-friends', [FriendsController::class, 'blocked']);
    
    Route::post('/clear-chat', [ ChatActionsController::class, 'clearChat']);
    Route::post('start-chat/{userId}', [ ChatActionsController::class, 'startChat']);
    Route::post('/account-notifications', [ ChatActionsController::class, 'toggleAccountNotifications']);
    Route::post('/chat-notifications/{threadId}', [ ChatActionsController::class, 'toggleChatNotifications']);
    Route::get('/download-all-attachments/{threadId}', [ MessageController::class, 'downloadAllAttachments']);
    
    Route::apiResource('friends', FriendsController::class);
    Route::apiResource('threads', ThreadsController::class);
    Route::get('/unread-counts', [ThreadsController::class, 'unreadCount']);
    Route::post('delivered-message', [ MessageController::class, 'deliveredMessage']);
    Route::apiResource('messages', MessageController::class);
    Route::apiResource('guppy-user', ProfileController::class)->only(['index', 'store']);


    Broadcast::channel('events-{id}', function ($user, $userId) {
        return (int) $user->id === (int) $userId;
    });

    Broadcast::channel('thread-{id}', function ($user, $threadId) {
        return (new ThreadsService)->threadExists($threadId);
    });

    Broadcast::channel('events', function (){
        return true;
    });
});