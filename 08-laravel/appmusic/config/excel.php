<?php

use PhpOffice\PhpSpreadsheet\Cell\StringValueBinder;

return [

    'exports' => [

        'chunk_size' => 1000,

        'pre_calculate_formulas' => false,

        'strict_null_comparison' => false,

        'csv' => [
            'delimiter' => ',',
            'enclosure' => '"',
            'line_ending' => PHP_EOL,
            'use_bom' => false,
            'include_separator_line' => false,
            'excel_compatibility' => false,
        ],

        'default_writer' => 'Xlsx', // Usando el valor literal

        'temporary_files' => [
            'local_path' => storage_path('framework/cache'),
            'remote_disk' => null,
            'remote_prefix' => null,
            'force_resync_remote' => null,
        ],
    ],

    'imports' => [

        'read_only' => true,

        'ignore_empty_cells' => false,

        'heading_row' => [
            'formatter' => 'slug',
        ],
    ],

    'extension_detector' => [
        'xlsx' => 'Xlsx', // Usando valores literales
        'xls'  => 'Xls',
        'csv'  => 'Csv',
        'ods'  => 'Ods',
        'pdf'  => 'Dompdf',
        'html' => 'Html',
    ],

    'value_binder' => [

        'default' => StringValueBinder::class,
    ],

    'calculation' => [
        'memory_limit' => '128M',
    ],
];
