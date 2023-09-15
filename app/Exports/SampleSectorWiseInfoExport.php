<?php

namespace App\Exports;

use App\SectorWiseInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class SampleSectorWiseInfoExport implements FromCollection, WithHeadings
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
            'Sector No',
            'Area(Ha)',
			'Clone',
			'No of Seedlings',
			
        ];
    }
}
