<?php

namespace App\Imports;

use App\YearWiseInfo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Auth;

class YearWiseInfoImport implements ToModel, WithHeadingRow, WithCustomCsvSettings, WithStartRow
{
	
	protected $div_id;
	
	 public function  __construct($div_id)
    {

    $this->div_id =$div_id;
    } 
	
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
		//dd($row);
		return new YearWiseInfo([
		    'plantation_id' => $row['plantation'],
		    'year'    => $row['year'],             
			'divisional_manager' => $row['name_of_the_divisional_manager'],
			'plantation_manager' => $row['name_of_the_plantation_manager'],
			'expenditure' => $row['expenditure_in_rslacs'],
			'percentage' => $row['survival_percentage'],			
			'division_id' => $this->div_id 
			
			
			
        ]);
		
	}
		
	public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',
        ];
    }
	
	public function startRow(): int
    {
    return 2;
    }
}
