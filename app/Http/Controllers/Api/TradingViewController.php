<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradingViewController extends Controller
{
    /**
     * Datafeed configuration for TradingView Charting Library.
     */
    public function getConfig()
    {
        return response()->json([
            'supports_search' => true,
            'supports_group_request' => false,
            'supports_marks' => true,
            'supported_resolutions' => ['1', '5', '15', '30', '60', 'D', 'W']
        ]);
    }

    /**
     * B-Book Order Execution Logic (Simulated).
     */
    public function placeOrder(Request $request)
    {
        // Logic to handle simulated B-Book execution
        $order = [
            'user_id' => auth()->id(),
            'symbol' => $request->symbol,
            'side' => $request->side,
            'qty' => $request->qty,
            'type' => 'market_execution'
        ];

        return response()->json(['status' => 'success', 'order' => $order]);
    }
}
