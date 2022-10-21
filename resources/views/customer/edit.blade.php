<x-layout>
    <div class="flex">
        @if (Session::has('customer_dupdate'))
           <div class="text-blue-500 text-xl" role="alert">
                {{ Session::get('customer_dupdate') }}
           </div>
       @endif
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

                    <td class="px-6 py-4 whitespace-nowrap ">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  Customer Name </th>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  Contact Last Name </th>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  Contact First Name </th>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  Phone </th>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  addressLine1 </th>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  addressLine2 </th>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  City </th>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  state </th>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <th>  Postal Code </th>
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
                                    <th>  Represent Number </th>
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

                        <tr class="odd:bg-white even:bg-slate-50">
                            <form method="POST" action="/customer/{{ $customer->customerNumber }}" enctype="multipart/form-data">
                                @csrf
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                            {{$customer->customerNumber }}
                                    </td>

                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="customerName" :value="old('customerName', $customer->customerName)"  />
                                    </td>

                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="contactLastName" :value="old('contactLastName', $customer->contactLastName)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="contactFirstName" :value="old('contactFirstName', $customer->contactFirstName)"  />
                                    </td>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="phone" :value="old('phone', $customer->phone)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="addressLine1" :value="old('addressLine1', $customer->addressLine1)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="addressLine2" :value="old('addressLine2', $customer->addressLine2)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="country" :value="old('country', $customer->country)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="city" :value="old('city', $customer->city)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="state" :value="old('state', $customer->state)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="postalCode" :value="old('postalCode', $customer->postalCode)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="salesRepEmployeeNumber" :value="old('salesRepEmployeeNumber', $customer->salesRepEmployeeNumber)"  />
                                    </td>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <td>
                                        <x-input name="creditLimit" :value="old('creditLimit', $customer->creditLimit)"  />
                                    </td>
                                </div>
                            </div>
                        </td><button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-darkerb"
                                > update
                            </button>
                        </form>
                            </tr>

                    </tbody>
                </table>
            </div>
            </div>
            </div>
            </div>
        </main>
    </div>
</x-layout>
