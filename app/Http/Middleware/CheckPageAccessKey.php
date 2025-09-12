<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPageAccessKey
{

    public function handle(Request $request, Closure $next)
    {
        // Получаем ключ из GET-параметра
        $providedKey = $request->get('key');

        // Проверяем наличие и совпадение ключа
        if ($providedKey !== env('PAGE_KEY')) {
            // Можно вернуть 403 или редирект
            abort(403, 'Доступ запрещён');
        }

        return $next($request);
    }
}
