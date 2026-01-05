<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="Name" required />
        <x-forms.input name="email" type="email" label="Email" required />
        <x-forms.input name="password" type="password" label="Password" required />
        <x-forms.input name="password_confirmation" type="password" label="Confirm Password" required />
        <x-forms.divider/>
        <x-forms.input name="employer" label="employer"/>
        <x-forms.input name="logo" label="logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>