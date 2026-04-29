<?php
include 'config.php';

ob_clean();
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . $apiKey;

$jsonInput = file_get_contents('php://input');
$input = json_decode($jsonInput, true);

// ── Aceptar DOS formatos ───────────────────────────────────────
// Formato A (scripts.js): { "prompt": "texto..." }
// Formato B (api.js):     { "contents": [...historial...] }

if (!empty($input['prompt'])) {
    // Formato simple — viene del buscador del index
    $contents = [
        [
            "role" => "user",
            "parts" => [["text" => $input['prompt']]]
        ]
    ];
} elseif (!empty($input['contents'])) {
    // Formato historial — viene del chat completo (Api.html)
    $contents = $input['contents'];
} else {
    http_response_code(400);
    echo json_encode(['error' => 'No se recibió contenido']);
    exit;
}

$data = [
    "system_instruction" => [
        "parts" => [[
            "text" => "Eres el Chef DelicIA's, un asistente culinario experto y amable. Tu especialidad es dar recetas detalladas, consejos de cocina y responder preguntas sobre ingredientes y técnicas culinarias. Siempre responde en español de manera cálida y entusiasta. Cuando des una receta, incluye ingredientes con cantidades y pasos claros y numerados. Usa emojis de comida ocasionalmente para hacer la conversación más amena."
        ]]
    ],
    "contents" => $contents
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$err = curl_error($ch);
curl_close($ch);

if ($err) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de conexión cURL', 'details' => $err]);
} else {
    http_response_code($httpCode);
    echo $response;
}
?>
