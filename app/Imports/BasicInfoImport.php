<?php

namespace App\Imports;

use App\BasicInfo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Auth;

class BasicInfoImport implements ToModel, WithHeadingRow, WithCustomCsvSettings, WithStartRow
{
	
	protected $div_id;
	
	 public function  __construct($div_id)
    {

    $this->div_id =$div_id;
    } 
	
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
		//dd($row);
		return new BasicInfo([
		
		    'plantation_id'    => $row['plantation'],             
			'divrange' => $row['range'],
			'series' => $row['series'],
			'year' => $row['year_of_plantation'],
			'rfblock' => $row['rf_block'],
			'netarea' => $row['net_area'],
			'grossarea' => $row['gross_area'],
			'espacement' => $row['espacement'],
			'village' => $row['village'],
			'mandal' => $row['mandal'],
			'district' => $row['district'],
			'assembly' => $row['assembly'],
			'parliament' => $row['parliament'],
			'forestdivision' => $row['forest_division'],
			'plantationwatcher' => $row['name_of_the_plantation_watcher'],
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
