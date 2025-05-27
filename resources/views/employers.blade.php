<x-layout>
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-8 text-center">Emplployers by Job Titles</h1>

        <x-forms.form method="GET" class="w-full flex flex-col justify-between gap-4">
            <div class="flex flex-col md:flex-row items-center justify-between space-x-4">
                <x-forms.input label="Name" name="name" placeholder="Filter by title" value="{{ request('name') }}" />
                <x-forms.input label="Location" name="location" placeholder="Filter by location"
                    value="{{ request('location') }}" />
                <x-forms.button class="mt-4">Filter</x-forms.button>
            </div>
            <div class="flex items-center justify-end mb-4">
                <x-forms.filter-clear>Clear Filter</x-forms.filter-clear>
            </div>
        </x-forms.form>

        <table class="w-full table-auto border-collapse border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Job Title</th>
                    <th class="p-2 border">Jobs Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employers as $employer)
                    <tr class="border-t">
                        <td class="p-2 border">{{ $employer->name }}</td>
                        <td class="p-2 border">
                            <a href="{{ $employer->jobUrl }}" class="hover:text-accent-hover"> {{ $employer->jobTitle }}
                        </td>
                        <td class="p-2 border">{{ $employer->jobLocation }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
