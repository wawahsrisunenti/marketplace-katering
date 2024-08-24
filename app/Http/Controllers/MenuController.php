public function store(Request $request) {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric'
    ]);

    $menu = new Menu();
    $menu->name = $request->name;
    $menu->description = $request->description;
    $menu->price = $request->price;
    $menu->merchant_id = Auth::user()->id;
    $menu->save();

    return response()->json(['message' => 'Menu added successfully!']);
}
