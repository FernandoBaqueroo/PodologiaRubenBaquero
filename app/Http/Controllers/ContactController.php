<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        //! Validar la entrada al email
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        //! Prepara los datos para el correo electrónico
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'userMessage' => $request->message,
        ];

        //! Enviar el correo electrónico con Laravel's Mail facade
        try {
            Mail::send('emails.email', $data, function ($message) use ($request) {
                $message->to(env("MAIL_TO_ADDRESS"))
                    ->subject('Consulta Online');
            });

            // Retornar una respuesta JSON para indicar éxito
            return response()->json(['success' => 'Email enviado correctamente']);
        } catch (\Exception $e) {
            // Retornar una respuesta JSON en caso de error
            return response()->json(['error' => 'Hubo un problema enviando el correo'], 500);
        }
    }

}
