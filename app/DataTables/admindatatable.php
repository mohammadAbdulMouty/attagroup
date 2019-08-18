<?php

namespace App\DataTables;

use App\Product;
use Yajra\DataTables\Services\DataTable;

class admindatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'datatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Product::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction(['width' => '80px'])
                    // ->parameters($this->getBuilderParameters());
                    ->parameters([
                        'dom'=>'Bfrtip',
                        'lengthMenu'=>[
                            [10,25,50,100,-1],
                            [10,25,50,'All Record']
                        ],
                        'buttons'      =>[
                            ['extend'=>'print','className'=>'btn btn-primary','text'=>'<i class="fas fa-print"></i> Print'],
                            ['extend'=>'excel','className'=>'btn btn-success','text'=>'<i class="fas fa-file-excel"></i> Export Excel'],
                            ['extend'=>'pdf','className'=>'btn btn-danger','text'=>'<i class="fas fa-file-excel"></i> Export PDF'],
                        ],
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'name',
            'description',
            'weight',
            'origin',
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return '_' . date('YmdHis');
    }
}
