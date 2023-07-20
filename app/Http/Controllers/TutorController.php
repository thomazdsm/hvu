<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        return view('tutors.index', compact('tutors'));
    }

    public function create()
    {
        $tutor = new Tutor();
        $animals = Animal::whereDoesntHave('tutors')->get();
        return view('tutors.create', compact('tutor', 'animals'));
    }

    public function store(Request $request)
    {
        // Valide os dados do formulário, se necessário
        $tutor = Tutor::create($request->all());

        // Obtenha os IDs dos animais do array enviado no request
        $animalIds = $request->input('animal_ids', []);

        // Associe os animais ao tutor usando o relacionamento `tutors()`
        $tutor->animals()->attach($animalIds);

        return redirect()->route('tutor.index')
            ->with('success', 'Tutor criado com sucesso!');
    }

    public function show(Tutor $tutor)
    {
        $animals = Animal::all();
        return view('tutors.show', compact('tutor', 'animals'));
    }

    public function edit(Tutor $tutor)
    {
        $animals = Animal::all();
        return view('tutors.edit', compact('tutor', 'animals'));
    }

    public function update(Request $request, Tutor $tutor)
    {
        // Valide os dados do formulário, se necessário
        $tutor->update($request->all());

        return redirect()->route('tutor.index')
            ->with('success', 'Tutor atualizado com sucesso!');
    }

    public function destroy(Tutor $tutor)
    {
        $tutor->delete();

        return redirect()->route('tutor.index')
            ->with('success', 'Tutor excluído com sucesso!');
    }
}
