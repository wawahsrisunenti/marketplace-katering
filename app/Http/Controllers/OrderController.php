public function store(Request $request) {
    $request->validate([
        'merchant_id' => 'required',
        'customer_id' => 'required',
        'delivery_date' => 'required|date',
        'total_price' => 'required|numeric'
    ]);

    $order = new Order();
    $order->merchant_id = $request->merchant_id;
    $order->customer_id = $request->customer_id;
    $order->delivery_date = $request->delivery_date;
    $order->total_price = $request->total_price;
    $order->save();

    return response()->json(['message' => 'Order placed successfully!']);
}