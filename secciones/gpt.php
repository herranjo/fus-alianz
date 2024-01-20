<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = $_POST['query'];
    $documentContent = '';

    // Procesar el archivo cargado si está presente
    if (isset($_FILES['document']) && $_FILES['document']['error'] == UPLOAD_ERR_OK) {
        $documentContent = file_get_contents($_FILES['document']['tmp_name']);
        // Aquí podrías procesar el contenido del documento como sea necesario
    }

    // Preparar los datos para enviar a la API
    $data = [
        'query' => $query,
        'document' => $documentContent // Asegúrate de que la API pueda manejar el contenido del documento de esta manera
    ];

    // Inicializar sesión cURL
    $ch = curl_init('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'); // Reemplaza con la URL real de la API
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    // Si la API requiere un token de autorización, descomenta y ajusta la siguiente línea
    // curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer TuTokenDeAPI']);

    // Ejecutar la solicitud cURL
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        echo "cURL Error: $error";
    } else {
        // Aquí puedes manejar la respuesta de la API como necesites
        echo $response;
    }
} else {
    echo "Método de solicitud no válido.";
}
?>