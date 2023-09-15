<?php

namespace App\Exports;

use App\Operations;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class OperationsInfoExport implements FromCollection, WithHeadings,  WithCustomStartCell, WithEvents, ShouldAutoSize
{
	
	protected $plantid;
	protected $divid;

    function __construct($plantid, $divid) {
        $this->plantid = $plantid;
		 $this->divid = $divid;
    }
	
    /**
    * @return \Illuminate\Support\Collection
    */
     public function collection()
    {
		//$divisionid = Auth::user()->division_id;
        return Operations::join('divisions', 'divisions.div_id', '=', 'operations_in_plantation.div_id')
		                       ->join('plantations','plantations.pid','=','operations_in_plantation.plant_id')
		                       ->where('operations_in_plantation.plant_id', '=', $this->plantid)	
                                ->where('operations_in_plantation.div_id', '=', $this->divid)								   
							   ->get(['plantations.plantation_name','divisions.div_name','operations_in_plantation.year','operations_in_plantation.before_sunheap_sowing_phy','operations_in_plantation.before_sunheap_sowing_fin','operations_in_plantation.sunheap_sowing_phy','operations_in_plantation.sunheap_sowing_fin','operations_in_plantation.pback_sunheapcrop_phy','operations_in_plantation.pback_sunheapcrop_fin','operations_in_plantation.ferilizer_phy','operations_in_plantation.fertilizer_fin','operations_in_plantation.circular_phy','operations_in_plantation.circular_fin','operations_in_plantation.lweeding_phy','operations_in_plantation.lweeding_fin','operations_in_plantation.ptb_capilaries_phy','operations_in_plantation.ptb_capilaries_fin','operations_in_plantation.cc_ploughing_phy','operations_in_plantation.cc_ploughing_fin','operations_in_plantation.harvesting_month','operations_in_plantation.first_coppi_cutti_phy','operations_in_plantation.first_coppi_cutti_fin','operations_in_plantation.second_coppi_cutti_phy','operations_in_plantation.second_coppi_cutti_fin','operations_in_plantation.ft_operations_phy','operations_in_plantation.ft_operations_fin']);			
							   
					
    }
	
	public function startCell(): string
    {
        return 'A2';
    }
    public function registerEvents(): array {
        
        return [
            AfterSheet::class => function(AfterSheet $event) {
                /** @var Sheet $sheet */
                $sheet = $event->sheet;
				$sheet->mergeCells('A1:A2');
				$sheet->setCellValue('A1', "Plantation");
				$sheet->getStyle('A1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('B1:B2');
				$sheet->setCellValue('B1', "Division");
				$sheet->getStyle('B1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('C1:C2');
				$sheet->setCellValue('C1', "Year (start from year of planting till conversion)");
				$sheet->getStyle('C1')->getAlignment()->setWrapText(true);
                $sheet->mergeCells('D1:E1');
                $sheet->setCellValue('D1', "Ploughing before sowing of sunheap");
				$sheet->getStyle('D1')->getAlignment()->setWrapText(true);
                $sheet->mergeCells('F1:G1');
                $sheet->setCellValue('F1', "Sunheap sowing");
				$sheet->getStyle('F1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('H1:I1');
                $sheet->setCellValue('H1', "Ploughing back sunhemp crop");
				$sheet->getStyle('H1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('J1:K1');
                $sheet->setCellValue('J1', "Fertilizer application");
				$sheet->getStyle('J1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('L1:M1');
                $sheet->setCellValue('L1', "Circular weeding");
				$sheet->getStyle('L1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('N1:O2');
                $sheet->setCellValue('N1', "Line weeding");
				$sheet->getStyle('N1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('P1:Q1');
                $sheet->setCellValue('P1', "Ploughing to break capilaries");
				$sheet->getStyle('P1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('R1:S1');
                $sheet->setCellValue('R1', "Criss-cross ploughing");
				$sheet->getStyle('R1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('T1:T2');
                $sheet->setCellValue('T1', "Harvesting month");
				$sheet->getStyle('T1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('U1:V1');
                $sheet->setCellValue('U1', "1st Coppices cutting");
				$sheet->getStyle('U1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('W1:X1');
                $sheet->setCellValue('W1', "2nd Coppices cutting");
				$sheet->getStyle('W1')->getAlignment()->setWrapText(true);
				$sheet->mergeCells('Y1:Z1');
                $sheet->setCellValue('Y1', "Fire tracing operations");
				$sheet->getStyle('Y1')->getAlignment()->setWrapText(true);
                
                $styleArray = [
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                ];
                
                $cellRange = 'A1:Z1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
				
				$cellRange = 'A2:Z2'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray);
				$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setBold(true);
            },
        ];
    }
      
    public function headings(): array
    {
        return [
                
                "Plantation", 
                "Division",				
                "Year",
                "Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Hmonth",
				"Phy",
                "Fin",
				"Phy",
                "Fin",
				"Phy",
                "Fin"
                				
        ];
    }
}
