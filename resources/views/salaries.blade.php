<x-layout>
    <div class="max-w-4xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-8 text-center">Average Salaries by Role</h1>

        <x-forms.form method="GET" class="w-full flex flex-col justify-between gap-4">
            <div class="flex items-center flex-col md:flex-row justify-between space-x-4">
                <x-forms.input label="title" name="title" placeholder="Filter by title" value="{{ request('title') }}" />
                <x-forms.input label="location" name="location" placeholder="Filter by location" value="{{ request('location') }}" />
                <x-forms.button class="mt-4">Filter</x-forms.button>
            </div>
            <div class="flex items-center justify-end space-x-4">
                <x-forms.filter-clear>Clear Filter</x-forms.filter-clear>
            </div>
        </x-forms.form>
  
        

        <table class="w-full table-auto border-collapse border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Title</th>
                    <th class="p-2 border">Avg Salary</th>
                </tr>
            </thead>
            <tbody>
                @foreach($salaries as $salary)
                    <tr class="border-t">
                        <td class="p-2 border">{{ $salary->title }}</td>
                        <td class="p-2 border">${{ number_format($salary->avg, 0) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>