<x-layout>
    <div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8 bg-gray-50">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900 dark:text-white">Регистрация аккаунта</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <x-card>
                <x-card.body>
                    <x-form>
                        <x-form.item>
                            <x-form.label>Ваше имя</x-form.label>
                            <x-form.input name="first_name" placeholder="Иван" autofocus />
                        </x-form.item>

                        <x-form.item>
                            <x-form.label>Ваша почта</x-form.label>
                            <x-form.input name="email" placeholder="mail@example.com" />
                        </x-form.item>

                        <x-form.item>
                            <x-form.label>Придумайте пароль</x-form.label>
                            <x-form.input name="password" placeholder="******" type="password" />
                        </x-form.item>

                        <x-form.item>
                            <x-form.label>Повторите пароль</x-form.label>
                            <x-form.input name="password_confirmation" placeholder="******" type="password" />
                        </x-form.item>

                        <x-form.item>
                            <x-form.checkbox name="agreement">Согласен с правилами регистрации</x-form.checkbox>
                        </x-form.item>

                        <div>
                            <x-button type="submit">Регистрация</x-button>
                        </div>
                    </x-form>
                </x-card.body>
            </x-card>
        </div>
    </div>

</x-layout>
