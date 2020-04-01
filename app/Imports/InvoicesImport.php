<?php

namespace App\Imports;

use App\Invoice;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class InvoicesImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Invoice([
            'row'     => $row[0],
            'code'    => $row[1],
            'fullName' => $row[2],
            'amount' => $row[3],
            'for' => $row[4],
            'invoice_code' => $row[5],
        ]);
    }
}
