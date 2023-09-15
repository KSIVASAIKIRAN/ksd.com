<?php

namespace App\Imports;

use App\SectorWiseInfo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Auth;

class SectorWiseInfoImport implements ToModel, WithHeadingRow, WithCustomCsvSettings, WithStartRow
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
		return new SectorWiseInfo([
		
		    'plant_id'    => $row['plantation'],             
			'sector_no' => $row['sector_no'],
			'area' => $row['areaha'],
			'clone' => $row['clone'],
			'seedlings' => $row['no_of_seedlings'],			
			'div_id' => $this->div_id 
			
			
			
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
