<?php

namespace App\Exports;

use App\SectorWiseInfo;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SectorWiseInfoExport implements FromCollection, WithHeadings, WithEvents, ShouldAutoSize
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
            'Sector No', 
            'Area(Ha)',   			
            'Clone',
            'No of Seedlings',
            
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
                
                $cellRange = 'A1:D1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
				$event->sheet->getDelegate()->getColumnDimension('A')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('B')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('C')->setWidth(20);
				$event->sheet->getDelegate()->getColumnDimension('D')->setWidth(20);
				
				
            },
        ];
    }
	
    public function collection()
    {
        return SectorWiseInfo::where('sector_wise_plantation_info.div_id', '=', $this->divid)
                                ->where('sector_wise_plantation_info.plant_id', '=', $this->id)	                               					   
							   ->get(['sector_wise_plantation_info.sector_no','sector_wise_plantation_info.area','sector_wise_plantation_info.clone','sector_wise_plantation_info.seedlings']);
    }
}
