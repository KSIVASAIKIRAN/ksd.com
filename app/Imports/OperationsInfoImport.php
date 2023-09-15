<?php

namespace App\Imports;

use App\Operations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Auth;

class OperationsInfoImport implements ToModel, WithCustomCsvSettings, WithStartRow
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
		return new Operations([
		
		    'plant_id'    => $row[0],             
			'year' => $row[1],
			'before_sunheap_sowing_phy' => $row[2],
			'before_sunheap_sowing_fin' => $row[3],
			'sunheap_sowing_phy' => $row[4],
			'sunheap_sowing_fin' => $row[5],
			'pback_sunheapcrop_phy' => $row[6],
			'pback_sunheapcrop_fin' => $row[7],
			'ferilizer_phy' => $row[8],
			'fertilizer_fin' => $row[9],
			'circular_phy' => $row[10],
			'circular_fin' => $row[11],
			'lweeding_phy' => $row[12],
			'lweeding_fin' => $row[13],
			'ptb_capilaries_phy' => $row[14],
			'ptb_capilaries_fin' => $row[15],
			'cc_ploughing_phy' => $row[16],
			'cc_ploughing_fin' => $row[17],
			'harvesting_month' => $row[18],
			'first_coppi_cutti_phy' => $row[19],
			'first_coppi_cutti_fin' => $row[20],
			'second_coppi_cutti_phy' => $row[21],
			'second_coppi_cutti_fin' => $row[22],
			'ft_operations_phy' => $row[23],
			'ft_operations_fin' => $row[24],
			'div_id' => $this->div_id
           
          
			
			
			
        ]);
		
		
    }
	
	public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',
        ];
    }
	
	/* public function headingRow(): int
    {
        return 2;
    } */
	
	public function startRow(): int
    {
     return 3;
    }

}
