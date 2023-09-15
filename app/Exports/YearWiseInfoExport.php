<?php

namespace App\Exports;

use App\YearWiseInfo;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class YearWiseInfoExport implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
   protected $id;
	protected $divid;

    function __construct($id, $divid) {
        $this->id = $id;
		 $this->divid = $divid;
    }
	
	public function headings():array{
        return[
            'Year', 
            'Name of the Divisional Manager',   			
            'Name of the Plantation Manager',
            'Expenditure in Rs.Lacs',
			'Survival%',
            
        ];
    } 
	
	public function registerEvents(): array {
        
        return [
            AfterSheet::class => function(AfterSheet $event) {

                /** @var Sheet $sheet */
				
				
                
                
                $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ];
                
                $cellRange = 'A1:E1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
				$event->sheet->getDelegate()->getColumnDimension('A')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('B')->setWidth(30);
				$event->sheet->getDelegate()->getColumnDimension('C')->setWidth(30);
				$event->sheet->getDelegate()->getColumnDimension('D')->setWidth(20);
				
				
            },
        ];
    }
	
    public function collection()
    {
        return YearWiseInfo::where('year_wise_info.division_id', '=', $this->divid)
                                ->where('year_wise_info.plantation_id', '=', $this->id)	                               					   
							   ->get(['year_wise_info.year','year_wise_info.divisional_manager','year_wise_info.plantation_manager','year_wise_info.expenditure','year_wise_info.percentage']);
    }
}
