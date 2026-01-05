<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs" class="mt-6 space-y-6">
        <x-forms.input name="title" label="Job Title" placeholder="CEO"/>
        <x-forms.input name="salary" label="Salary" placeholder="$90,00 USD"/>
        <x-forms.input name="location" label="Location" placeholder="Winter Park, Florida"/>
        <x-forms.select name="schedule" label="Schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>
        <x-forms.input name="url" label="URL" placeholder="https://acme.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>
        <x-forms.divider />
        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="laracasts, video, eduction"/>
        <x-forms.button>Post Job</x-forms.button>
    </x-forms.form>
</x-layout>
