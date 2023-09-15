<?php

namespace App\Exports;

use App\YearWiseInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class SampleYearWiseInfoExport implements FromCollection, WithHeadings
{
	private $id;
    /**
    * @return \Illuminate\Support\Collection
    */
   public function __construct(int $plantid) 
    {
        //$this->divid = $divid;
		$this->plantid = $plantid;
    }
	
    public function collection()
    {
        //return SectorWiseInfo::all();
		$data = DB::table('plantations')->where('pid', $this->plantid)->get(['pid']);
		return $data;
    }
	
	 public function headings(): array
    {
        return [		   
            'Plantation',
            'Year',
            'Name of the Divisional Manager',
			'Name of the Plantation Manager',
			'Expenditure in Rs.Lacs',
			'Survival Percentage',
			
        ];
    }
}
