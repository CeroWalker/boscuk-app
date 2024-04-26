<!DOCTYPE html>
<html lang="en">
<head>
    @include('comps/requirement')
</head>
<body>
    @include('comps/header')
    @include('comps.tawk')
<div class="container mx-auto py-6">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ders Adı
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Sınıf
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @for($x = 0; $x <= 10; $x++)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Ders 1</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-500">X. Sınıf</div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto py-6">
    <div class="mb-4">
        <label for="classSelect" class="block text-sm font-medium text-gray-700">Sınıf Seçin</label>
        <select id="classSelect" name="class" onchange="location = this.value;" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">Sınıf Seçin</option>
            <option value="/test">9. Sınıf</option>
            <option value="/lessons/10">10. Sınıf</option>
            <option value="/lessons/11">11. Sınıf</option>
            <option value="/lessons/12">12. Sınıf</option>
            <option value="/lessons/ekpss">EKpss</option>
        </select>
    </div>



</div>

</body>
</html>
