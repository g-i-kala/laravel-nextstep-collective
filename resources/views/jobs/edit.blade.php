@props(['job'])
<x-layout>
    <x-page-heading>Edit Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/update/{{ $job->id}}">
        @csrf
        @method('PATCH')
        <x-forms.input label="Title" name="title" value="{{ $job->title }}" />
        <x-forms.input label="Salary" name="salary" value="{{ $job->salary }}" />
        <x-forms.input label="Location" name="location" value="{{ $job->location }}" />

        <x-forms.select label='Schedule' name='schedule'>
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" value="{{ $job->url }}" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" :isChecked="$job->featured"/>

        <x-forms.input label="Tags (comma separated)" name="tags" value="{{ implode(', ', $job->tags->pluck('name')->toArray()) }}" />

        <x-forms.divider />

        <x-forms.button>Update</x-forms.button>
        <x-link-button href="/jobs/show" class="bg-gray-500">Cancel</x-link-button>

    </x-forms.form>

</x-layout>