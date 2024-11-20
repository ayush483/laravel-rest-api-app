<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $devices = $user->devices; // Assuming you have a relation set up
        return response()->json($devices);
    }

    public function show($id)
    {
        $device = Device::findOrFail($id);
        return response()->json($device);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'device_unique_id' => 'required|string|unique:devices',
        ]);

        $device = Device::create($request->all());
        return response()->json($device, 201);
    }
}