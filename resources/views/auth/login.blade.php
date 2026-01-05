<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
        <x-forms.input name="email" type="email" label="Email" required />
        <x-forms.input name="password" type="password" label="Password" required />

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>