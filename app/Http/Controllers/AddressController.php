<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class AddressController extends Controller
{
    public function search($ceps)
    {
        $viaCepUrl = env('VIA_CEP_URL');
        $cepArray = explode(',', $ceps);
        $results = [];

        foreach ($cepArray as $cep) {
            $cep = preg_replace('/[^0-9]/', '', $cep);
            $response = Http::get("{$viaCepUrl}/{$cep}/json/");
            $data = $response->json();

            // Ignorar ceps inválidos
            if (isset($data['erro']) && $data['erro'] === true) {
                continue;
            }

            $results[] = [
                'cep' => str_replace('-', '', $data['cep']),
                'label' => "{$data['logradouro']}, {$data['bairro']}",
                'logradouro' => $data['logradouro'],
                'complemento' => $data['complemento'] ?? '',
                'bairro' => $data['bairro'],
                'localidade' => $data['localidade'],
                'uf' => $data['uf'],
                'ibge' => $data['ibge'],
                'gia' => $data['gia'] ?? '',
                'ddd' => $data['ddd'] ?? '',
                'siafi' => $data['siafi'] ?? ''
            ];
        }
        $results = array_reverse($results);
        return response()->json($results);
    }
}
