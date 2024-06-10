<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\AIOrder;
use App\Models\Order;
use App\Models\Category;



class AIController extends Controller
{
    public function showForm()
    {
        return view('home.aiimage');
    }

    public function generateImage(Request $request)
    {
        $response = Http::withHeaders([
            'api-key' => '794bfbbb-0692-43d8-b9e8-09cc9e1d7921',
        ])->post('https://api.deepai.org/api/text2img', [
            'text' => $request->input('text'),
            'width' => '512',
            'height' => '512',
            'image_generator_version' => $request->input('image_generator_version', 'standard'),
            'negative_prompt' => 'sex,bad anatomy,bad proportions, blurry, cloned face, cropped, deformed, dehydrated, disfigured, duplicate, error, extra arms, extra fingers, extra legs, extra limbs, fused fingers, gross proportions, jpeg artifacts, long neck, low quality, lowres, malformed limbs, missing arms, missing legs, morbid, mutated hands, mutation, mutilated, out of frame, poorly drawn face, poorly drawn hands, signature, text, too many fingers, ugly, username, watermark, worst quality',
        ]);

        $responseBody = $response->json();
        $imageUrl = $responseBody['output_url'] ?? null;

        if ($imageUrl) {
            $imageContent = file_get_contents($imageUrl);
            $fileName = 'generated_image_' . time() . '.jpg';
            Storage::disk('public')->put($fileName, $imageContent);
            $storedImageUrl = Storage::url($fileName);

            $AIOrder = new AIOrder();
            $AIOrder->text = $request->input('text');
            $AIOrder->image_url = $storedImageUrl;
            $AIOrder->width = '512';
            $AIOrder->height = '512';
            $AIOrder->version = $request->input('image_generator_version', 'standard');
            $AIOrder->status = 'generated';
            $AIOrder->save();

            return view('home.aiimage', [
                'image_url' => $storedImageUrl,
                'order_id' => $AIOrder->id,
                'text' => $AIOrder->text,
                'version' => $AIOrder->version
            ]);
        }

        return redirect()->back()->withErrors(['error' => 'Failed to generate image']);
    }

    public function editImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        $image = $request->file('image');
        if ($image) {
            $filePath = $image->store('images');

            $response = Http::withHeaders([
                'api-key' => '794bfbbb-0692-43d8-b9e8-09cc9e1d7921',
            ])->attach('image', fopen(storage_path('app/' . $filePath), 'r'), $image->getClientOriginalName())
              ->post('https://api.deepai.org/api/colorizer');

            if ($response->successful()) {
                $responseData = $response->json();
                $colorizedImageUrl = $responseData['output_url'] ?? null;

                if ($colorizedImageUrl) {
                    return view('home.aiimage', ['image_url' => $colorizedImageUrl]);
                }
            }
        }

        return redirect()->back()->withErrors(['error' => 'Failed to colorize image']);
    }

    public function showProcessOrderForm($id)
    {
        $order = AIOrder::findOrFail($id);
        $categories = Category::all(); // Fetch categories from the database
        return view('home.processorder', compact('order', 'categories'));
    }

    public function processOrder(Request $request, $id)
    {
        $order = AIOrder::findOrFail($id);

    // Remove unnecessary validation rules for category and size

    // Calculate total price based on category, size, and any other factors
    $totalPrice = $order->price; // Get the price from the category model

    // Adjust total price based on size
    if ($order->size === 'Medium') {
        $totalPrice += 50;
    } elseif ($order->size === 'Large') {
        // Adjust for Large size
        $totalPrice += 70;
    }
    elseif ($order->size === 'Small'){
        $totalPrice += 0;
    }

    // Update the order attributes
    $order->customer_name = $request->input('customer_name');
    $order->customer_email = $request->input('customer_email');
    $order->customer_address = $request->input('customer_address');
    $order->total_price = $totalPrice; // Update total price
    $order->category_id = $request->input('category'); // Associate the selected category with the order
    $order->status = 'processed';
    $order->save();

    return redirect()->route('home')->with('success', 'Order processed successfully.');
}

}
