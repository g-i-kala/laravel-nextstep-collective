<x-layout>
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-8 text-center">Emplployers by Job Titles</h1>

        <x-forms.form method="GET" class="w-full flex justify-between mb-6 gap-4">
            <x-forms.input label="name" name="name" placeholder="Filter by title" value="{{ request('name') }}" />
            <x-forms.input label="location" name="location" placeholder="Filter by location" value="{{ request('location') }}" />
            <x-forms.button >Filter</x-forms.button>
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
                @foreach($employers as $employer)
                    <tr class="border-t">
                        <td class="p-2 border">{{ $employer->name }}</td>
                        <td class="p-2 border"> {{ $employer->title }} </td>
                        <td class="p-2 border">{{ $employer->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>