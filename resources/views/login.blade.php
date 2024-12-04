<x-layouts.loginlayout>
    <h1 class="text-blue-500 text-3xl">Přihlásit se</h1>
    <form action="/login" method="POST" class="flex flex-col gap-4 py-5">
        <x-input type="email" placeholder="E-mail" name="email"></x-input>
        <x-input type="password" placeholder="Heslo" name="password"></x-input>
        <x-primary-button class="mt-24" type="submit">Přihlásit se</x-primary-button>
    </form>
</x-layouts.loginlayout>