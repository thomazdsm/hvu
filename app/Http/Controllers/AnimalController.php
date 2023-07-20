<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Specie;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function create()
    {
        $animal = new Animal();
        $species = Specie::all();
        return view('animals.create', compact('animal', 'species'));
    }

    public function store(Request $request)
    {
        // Valide os dados do formulário, se necessário
        Animal::create($request->all());

        return redirect()->route('animal.index')
            ->with('success', 'PET criado com sucesso!');
    }

    public function show(Animal $animal)
    {
        $species = Specie::all();
        return view('animals.show', compact('animal', 'species'));
    }

    public function edit(Animal $animal)
    {
        $species = Specie::all();
        return view('animals.edit', compact('animal', 'species'));
    }

    public function update(Request $request, Animal $animal)
    {
        // Valide os dados do formulário, se necessário
        $animal->update($request->all());

        return redirect()->route('animal.index')
            ->with('success', 'PET atualizado com sucesso!');
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();

        return redirect()->route('animal.index')
            ->with('success', 'PET excluído com sucesso!');
    }
}
