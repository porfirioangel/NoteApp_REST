<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;
use Validator;
use DateTime;

class NotesController extends Controller
{
    public function getAll(Request $request) {
        $notes = Note::all();
        $jsonResponse = response()->json($notes);
        $jsonResponse->setStatusCode(200);
        return $jsonResponse;
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'contenido' => ['bail', 'required', 'max:255']
        ]);

        if (!$validator->passes()) {
            $jsonResponse = response()->json($validator->errors()->all());
            $jsonResponse->setStatusCode(400);
            return $jsonResponse;
        }

        $note = new Note();
        $note->fecha = new DateTime();
        $note->contenido = $request['contenido'];

        try {
            $note->save();
            $jsonResponse = response()->json([
                'message' => 'Nota creada correctamente'
            ]);
            $jsonResponse->setStatusCode(200);
            return $jsonResponse;
        } catch (\Exception $e) {
            $jsonResponse = response()->json([
                'error' => $e->getMessage()
            ]);
            $jsonResponse->setStatusCode(400);
        }
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'numeric'],
            'contenido' => ['bail', 'required', 'max:255']
        ]);

        if (!$validator->passes()) {
            $jsonResponse = response()->json($validator->errors()->all());
            $jsonResponse->setStatusCode(400);
            return $jsonResponse;
        }

        $note = Note::find($request['id']);
        $note->contenido = $request['contenido'];

        try {
            $note->save();
            $jsonResponse = response()->json([
                'message' => 'Nota actualizada correctamente'
            ]);
            $jsonResponse->setStatusCode(200);
            return $jsonResponse;
        } catch (\Exception $e) {
            $jsonResponse = response()->json([
                'error' => $e->getMessage()
            ]);
            $jsonResponse->setStatusCode(400);
        }
    }

    public function view(Request $request) {

    }

    public function delete(Request $request) {

    }
}
