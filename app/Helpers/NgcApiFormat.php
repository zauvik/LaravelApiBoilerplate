<?php

function NgcApiPaginate($perpage, $url, $data, $alldata = null)
{
    if ($perpage >= 1) {
        if ($perpage >= $data->total()) {
            return [
                'success' => true,
                'status_code' => 200,
                'message' => 'max data has been reached',
                'data' => [
                    'url' => null,
                    'total_data' => null,
                    'per_page' => null,
                    'current_page' => null,
                    'last_page' => null,
                    'next_page_url' => null,
                    'result' => $alldata
                ]
            ];
        }
        return [
            'success' => true,
            'status_code' => 200,
            'data' => [
                'url' => $url,
                'total_data' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->LastPage(),
                'next_page_url' => urldecode($data->nextPageUrl()),
                'result' => $data->toArray()['data']
            ]

        ];
    } else {
        return [
            'success' => false,
            'status_code' => 400,
            'error' => 'minimal perpage is 1'
        ];
    }
}

function ngcApiReturn($data, $message = null)
{
    return [
        'success' => true,
        'status_code' => 200,
        'message' => $message,
        'data' => $data
    ];
}

function ngcApiException($data, $message = null)
{
    return [
        'success' => false,
        'status_code' => 400,
        'message' => $message,
        'data' => $data
    ];
}

function ngcApiValidate($error)
{
    return [
        'success' => false,
        'status_code' => 400,
        'message' => 'The given data was invalid.',
        'errors' => $error
    ];
}
