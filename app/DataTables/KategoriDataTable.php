<?php

namespace App\DataTables;

use App\Models\Kategori;
use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            /*           ->addColumn('action', 'kategori.action') */
            /*  Soal no 3 & 4 - JOBSHEET 5 */
            ->addColumn('action', function ($row) {
                return '<a href="/PWL_POS/public/kategori/edit/' . $row->kategori_id . '
                " class="btn btn-primary">Edit</a> 
                        <a href="/PWL_POS/public/kategori/delete/' . $row->kategori_id . '
                        " class="btn btn-primary">Delete</a>';
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(KategoriModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('kategori-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
                //tugas 1 Praktikum pwl 5
                //Button::make('add')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
    return [
    /* Column::computed('action')
    ->exportable(false)
    ->printable(false)
    ->width(60)
    ->addClass('text-center'), */
    Column::make('kategori_id'),
    Column::make('kategori_kode'),
    Column::make('kategori_nama'),
    Column::make('created_at'),
    Column::make('updated_at'),
    ];
    }
    /**
    * Get the filename for export.
    */
    protected function filename(): string
    {
    return 'Kategori_' . date('YmdHis');
    }
}