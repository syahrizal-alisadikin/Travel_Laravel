<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use App\Transaction;
use App\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['transaction_detail', 'travel_package', 'user'])->findOrFail($id);

        return view('pages.checkout', [
            "item" => $item
        ]);
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'Indonesia',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYear(5)
        ]);
        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all(); //Validasi data
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        if ($request->is_visa) {
            $transaction->transaction_total += 200;
            $transaction->additional_visa += 200;
        }

        $transaction->transaction_total += $transaction->travel_package->price;
        $transaction->save();
        return redirect()->route('checkout', $id)->with('create', 'Data Berhasil Ditambahkan!!');
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['transaction_detail', 'travel_package'])
            ->findOrFail($item->transactions_id);

        if ($item->is_visa) {
            $transaction->transaction_total -= 200;
            $transaction->additional_visa -= 200;
        }

        $transaction->transaction_total -= $transaction->travel_package->price;
        $transaction->save();
        $item->delete();

        return redirect()->route('checkout', $item->transactions_id)->with('create', 'Data Berhasil Dihapus!!');
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success');
    }
}
