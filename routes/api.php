<?php

use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\ChannelManager\ChannelManagerController;
use App\Http\Controllers\Chatbot\ChatbotController;
use App\Http\Controllers\Inventory\InventoryController;
use App\Http\Controllers\PaymentConnections\PaymentConnectionsController;
use App\Http\Controllers\RateAnalysis\RateAnalysisController;
use App\Http\Controllers\RevenueManagement\RevenueManagementController;
use App\Http\Controllers\WebsiteBuilder\WebsiteBuilderController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    // Booking Routes
    Route::prefix('booking')->group(function () {
        Route::get('/get-bookings', [BookingController::class, 'getBookings']);
        // Add more booking routes as needed
    });

    // Channel Manager Routes
    Route::prefix('channel-manager')->group(function () {
        Route::get('/get-channels', [ChannelManagerController::class, 'getChannels']);
        // Add more channel manager routes as needed
    });

    // Chatbot Routes
    Route::prefix('chatbot')->group(function () {
        Route::post('/send-message', [ChatbotController::class, 'sendMessage']);
        // Add more chatbot routes as needed
    });

    // Inventory Routes
    Route::prefix('inventory')->group(function () {
        Route::get('/get-inventory', [InventoryController::class, 'getInventory']);
        // Add more inventory routes as needed
    });

    // Payment Connections Routes
    Route::prefix('payment-connections')->group(function () {
        Route::post('/process-payment', [PaymentConnectionsController::class, 'processPayment']);
        // Add more payment connections routes as needed
    });

    // Rate Analysis Routes
    Route::prefix('rate-analysis')->group(function () {
        Route::get('/analyze-rates', [RateAnalysisController::class, 'analyzeRates']);
        // Add more rate analysis routes as needed
    });

    // Revenue Management Routes
    Route::prefix('revenue-management')->group(function () {
        Route::get('/manage-revenue', [RevenueManagementController::class, 'manageRevenue']);
        // Add more revenue management routes as needed
    });

    // Website Builder Routes
    Route::prefix('website-builder')->group(function () {
        Route::post('/build-website', [WebsiteBuilderController::class, 'buildWebsite']);
        // Add more website builder routes as needed
    });
});


