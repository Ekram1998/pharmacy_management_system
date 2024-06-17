<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Medicine;
use App\Models\Medicine_stock;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customer['TotalCustomers'] = Customer::count();
        $medicine['TotalMedicines'] = Medicine::count();
        $totalstock['TotalStocks'] = Medicine_stock::count();
        $suppliers['TotalSuppliers'] = Supplier::count();
        $invoices['TotalInvoices'] = Invoice::count();
        $purchase['TotalPurchases'] = Purchase::count();
        return view("admin.dashboard.index", $customer, $medicine, $totalstock, $suppliers, $invoices, $purchase);
    }
}
