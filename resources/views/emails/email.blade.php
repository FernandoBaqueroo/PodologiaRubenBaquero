<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Online</title>
</head>
<body style="background-color: #f9fafb; font-family: Arial, sans-serif; margin: 0; padding: 0;">
<div style="max-width: 600px; margin: 20px auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
    <h1 style="font-size: 24px; font-weight: bold; color: #1a202c; margin-bottom: 16px; text-align: center;">
        Nueva Consulta Recibida
    </h1>
    <p style="font-size: 16px; color: #4a5568; margin-bottom: 12px;">
        <strong>Nombre:</strong> {{ $name }}
    </p>
    <p style="font-size: 16px; color: #4a5568; margin-bottom: 12px;">
        <strong>Email:</strong> {{ $email }}
    </p>
    <div style="margin-top: 16px; padding: 16px; background-color: #edf2f7; border-left: 4px solid #3182ce;">
        <h2 style="font-size: 18px; font-weight: bold; color: #2d3748; margin-bottom: 8px;">Mensaje:</h2>
        <p style="font-size: 16px; color: #4a5568;">{{ $userMessage }}</p>
    </div>
    <div style="margin-top: 20px; text-align: center; font-size: 14px; color: #718096;">
        Este correo fue enviado desde el formulario de contacto de tu sitio web.
    </div>
</div>
</body>
</html>
