<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Affiche une liste des offres d'emploi.
     */
    public function index()
    {
        return Job::paginate(10); // Retourne les offres avec pagination (10 par page)
    }

    /**
     * Affiche une offre d'emploi spécifique.
     */
    public function show($id)
    {
        $job = Job::find($id);

        if (!$job) {
            return response()->json(['message' => 'Job not found'], 404);
        }

        return response()->json($job);
    }

    /**
     * Crée une nouvelle offre d'emploi.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:191',
            'description' => 'required|string',
            'location' => 'required|string|max:191',
            'salary' => 'nullable|numeric',
        ]);

        $job = Job::create($validatedData);

        return response()->json($job, 201);
    }

    /**
     * Met à jour une offre d'emploi existante.
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);

        if (!$job) {
            return response()->json(['message' => 'Job not found'], 404);
        }

        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:191',
            'description' => 'sometimes|required|string',
            'location' => 'sometimes|required|string|max:191',
            'salary' => 'nullable|numeric',
        ]);

        $job->update($validatedData);

        return response()->json($job);
    }

    /**
     * Supprime une offre d'emploi.
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        if (!$job) {
            return response()->json(['message' => 'Job not found'], 404);
        }

        $job->delete();

        return response()->json(['message' => 'Job deleted successfully'], 200);
    }
}
