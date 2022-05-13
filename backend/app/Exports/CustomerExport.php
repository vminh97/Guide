<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Model\Customer;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class TestExport implements FromCollection,WithHeadings, WithEvents,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $customer = Customer::select('*')->get();
        foreach($customer as $c){
            $post_ex[]= array(
                '0'=>$c->id,
                '1'=>$c->customer_name,
                '2'=>$c->first_name,
                '3'=>$c->last_name,
                '4'=>$c->image_customer,
                '5'=>$c->email,
                '6'=>$c->phone,
                '7'=>$c->address,
                '8'=>($c->isactive==0)?'chưa xác thực':'đã xác thực',
            );
        }
        return (collect($post_ex));
        
        return $c;
    }
    public function headings(): array
    {
        return [
            'Mã Khách Hàng',
            'Họ Và Tên Khách Hàng',
            'Tên Khách Hàng',
            'Họ Khách Hàng',
            'Avatar',
            'Email',
            'Số Điện Thoại',
            'Địa Chỉ',
            'Xác Thực',

        ];
    }
    public function registerEvents():array{
        return [
            AfterSheet::class  =>function(AfterSheet $event){
                $cellRange ='A1:W1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->getSize(14);
            }
        ];
    }
}