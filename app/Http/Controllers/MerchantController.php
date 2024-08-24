public function index() {
    $merchants = Merchant::all();
    return response()->json($merchants);
}

public function store(Request $request) {
    $request->validate([
        'company_name' => 'required',
        'address' => 'required',
        'contact' => 'required',
        'description' => 'required'
    ]);

    $merchant = new Merchant();
    $merchant->company_name = $request->company_name;
    $merchant->address = $request->address;
    $merchant->contact = $request->contact;
    $merchant->description = $request->description;
    $merchant->save();

    return response()->json(['message' => 'Merchant created successfully!']);
}
