@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600 dark:text-red-400">¡Ups! Algo ha salido mal.</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
            @foreach ($errors->all() as $error)
                <li>Tus credenciales no coinciden con nuestros registros.</li>
            @endforeach
        </ul>
    </div>
@endif
