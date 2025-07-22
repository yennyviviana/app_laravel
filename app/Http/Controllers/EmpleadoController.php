<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:empleados',
            'telefono' => 'nullable',
            'cargo' => 'required',
            'salario' => 'required|numeric',
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente');
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:empleados,correo,' . $empleado->id,
            'telefono' => 'nullable',
            'cargo' => 'required',
            'salario' => 'required|numeric',
        ]);

        $empleado->update($request->all());
        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado');
    }
}

