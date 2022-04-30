<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Universidad;

class UniversidadTable extends DataTableComponent
{
    protected $model = Universidad::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setPerPageAccepted([5,10, 15, 20, 25, 30, 50, 100,-1]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable()
                ->searchable(),
            Column::make("Dirección", "direccion")
                ->sortable()
                ->searchable(),
            Column::make("Email", "email")
            ->sortable()
            ->searchable(),
            Column::make("Teléfono", "telefono")
            ->sortable()
            ->searchable(),

            Column::make("Editar otra cosa", "id")
                ->view("tablas.botones.universidad.editar"),
        ];

    }
}
