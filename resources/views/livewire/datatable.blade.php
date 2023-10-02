<div>
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="pb-0 card-body">
                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Default Datatable</h6>
                </div>
                <div class="relative overflow-x-auto card-body">
                    <table id="datatable" class="table w-full pt-4 text-gray-700 dark:text-zinc-100">
                        <thead>
                            <tr>
                                <th
                                    class="p-4 pr-8 border rtl:border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">
                                    Name</th>
                                <th class="p-4 pr-8 border border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">
                                    Position</th>
                                <th class="p-4 pr-8 border border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">
                                    Office
                                </th>
                                <th class="p-4 pr-8 border border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">
                                    Age
                                </th>
                                <th class="p-4 pr-8 border border-l-0 border-y-2 border-gray-50 dark:border-zinc-600">
                                    Start
                                    date</th>
                                <th
                                    class="p-4 pr-8 border border-l-0 rtl:border-l border-y-2 border-gray-50 dark:border-zinc-600">
                                    Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td
                                        class="p-4 pr-8 border border-t-0 rtl:border-l-0 border-gray-50 dark:border-zinc-600">
                                        {{ $user['name'] }}</td>
                                    <td
                                        class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                        {{ $user['position'] }}</td>
                                    <td
                                        class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                        {{ $user['office'] }}</td>
                                    <td
                                        class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                        {{ $user['age'] }}
                                    </td>
                                    <td
                                        class="p-4 pr-8 border border-t-0 border-l-0 border-gray-50 dark:border-zinc-600">
                                        {{ $user['start_date'] }}</td>
                                    <td
                                        class="p-4 pr-8 border border-t-0 border-l-0 rtl:border-l border-gray-50 dark:border-zinc-600">
                                        ${{ $user['salary'] }}</td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
