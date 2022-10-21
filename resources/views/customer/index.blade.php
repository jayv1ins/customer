<x-layout>
    <section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
       This the customer index

       @if (Session::has('customer_deleted'))
           <div class="text-red-500 text-xl" role="alert">
                {{ Session::get('customer_deleted') }}
           </div>
       @endif


    </h1>

    <div class="flex">
        <aside class="w-48 flex-shirnk-0">
            <h4 class="font-semibold mb-4">Links</h4>

            <ul>
                <li>
                    <a href="/dashboard" class="text-blue-500">Customer</a>
                </li>
            </ul>
        </aside>

        <main class="border border-gray-200 p-6 rounded-xl">
            <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200">

                        <td class="px-6 py-4 whitespace-nowrap ">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        <th>  Customer Number </th>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        <th>  Customer Name </th>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        <th>  Phone number </th>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        <th>  Country </th>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="text-sm font-medium text-gray-900">
                                        <th>  Credit Limit </th>
                                    </div>
                                </div>
                            </td>

                            @foreach ($customers as $customer)
                            <tr class="odd:bg-white even:bg-slate-50">

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <td>  {{ $customer->customerNumber }} </td>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <td>  {{ $customer->customerName }} </td>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <td>  {{ $customer->phone }} </td>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <td>  {{ $customer->country }} </td>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            <td>  {{ $customer->creditLimit }} </td>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="/customer/{{ $customer->customerNumber }}/view" class="text-blue-500 hover:text-blue-600">view</a>
                                    <a href="/customer/{{ $customer->customerNumber }}/edit" class="text-blue-500 hover:text-blue-600">edit</a>
                                    {{-- <a href="{{ $customer->customerNumber }}" class="text-red-500 hover:text-blue-600">delete</a> --}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form method="post" action="{{ $customer->customerNumber }}">
                                        @csrf

                                        <button class="text-xs text-gray-400">Delete</button>
                                    </form>
                                </td>
                            </tr>@endforeach
                    </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>
        </main>
    </div>
    </section>
</x-layout>
