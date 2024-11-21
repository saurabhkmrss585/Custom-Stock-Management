<?php

namespace App\Http\Controllers;

use App\Models\SalePart;
use App\Models\SoldStock;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function generateInvoice($soldStockId)
    {
        // Retrieve the SoldStock entry using the soldStockId
        $soldStock = SoldStock::find($soldStockId);

        // Check if the SoldStock entry exists
        if (!$soldStock) {
            return back()->withErrors("Invoice not found for the given sale.");
        }

        // Prepare data for the invoice PDF
        $data = [
            'saleDate' => $soldStock->saleDate,
            'soldProducts' => json_decode($soldStock->products, true),
            'totalAmount' => $soldStock->total_amount,
        ];

        // Generate the PDF using the 'invoice' view
        $pdf = Pdf::loadView('invoice', $data);

        // Return the PDF download
        return $pdf->download('invoice-' . $soldStockId . '.pdf');
    }


    public function generateInvoice_parts($salePartId)
    {
        // Retrieve the sale part details from the database using the passed salePartId
        $salePart = SalePart::find($salePartId);

        // Check if the salePart exists
        if (!$salePart) {
            return back()->withErrors("Invoice not found for the given sale.");
        }

        // Prepare data for the invoice
        $data = [
            'saleDate' => $salePart->saleDate,
            'soldProducts' => json_decode($salePart->products, true),
            'totalAmount' => $salePart->total_price,
        ];

        // Generate the PDF using the 'invoice' view
        $pdf = Pdf::loadView('invoice_parts', $data);
        return $pdf->download('invoice-' . $salePartId . '.pdf');
    }
}
