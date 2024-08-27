<?php

namespace App\Exports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class UserExport implements FromView, WithColumnWidths, WithStyles
{
    /**
     * Devuelve la vista que será exportada a Excel.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function view(): View
    {
        return view('users.excel', [
            'users' => User::all()
        ]);
    }

    /**
     * Define el ancho de las columnas en el archivo Excel.
     *
     * @return array
     */
    public function columnWidths(): array
    {
        return [
            'A' => 5,    // Ancho de la columna A
            'B' => 30,   // Ancho de la columna B
            'C' => 35,   // Ancho de la columna C
            'D' => 15,   // Ancho de la columna D
            'E' => 24,   // Ancho de la columna E
        ];
    }

    /**
     * Aplica estilos a las celdas del archivo Excel.
     *
     * @param \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet): array
    {
        return [
            1 => [
                'font' => [
                    'bold' => true,
                    'size' => 16
                ]
            ],
        ];
    }
}



