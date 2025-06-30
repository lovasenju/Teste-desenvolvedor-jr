<x-app-layout>
    <x-slot name="header">
        <h2 class="text-6xl font-serif text-gray-800 dark:text-gray-200 leading-tight flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 dark:text-gray-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.5z"/>
            </svg>
            <span>Tela Inicial</span>
        </h2>
    </x-slot>

    <div class="p-6">
    <p class="text-white">{{ __("You're logged in!") }}</p>

        <div style="margin-top: 20px;">

            @role('comum')
                <a href="{{ url('/produtos') }}" style="display: inline-block; margin: 5px; padding: 10px 15px; background-color: #3490dc; color: white; text-decoration: none; border-radius: 5px;">
                    Gestão de Produtos
                </a>

                <a href="{{ url('/categorias') }}" style="display: inline-block; margin: 5px 15px; padding: 10px 15px; background-color: #38c172; color: white; text-decoration: none; border-radius: 5px;">
                    Gestão de Categorias
                </a>

                <a href="{{ url('/marcas') }}" style="display: inline-block; margin: 5px 15px; padding: 10px 15px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 5px;">
                    Gestão de Marcas
                </a>
            @endrole

            @role('admin')
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Gestão de Usuários</a>

                <a href="{{ url('/permissoes') }}" style="display: inline-block; margin: 5px; padding: 10px 15px; background-color: #f6993f; color: white; text-decoration: none; border-radius: 5px;">
                    Gestão de Permissões
                </a>
            @endrole

        </div>
    </div>
</x-app-layout>