<div>
    <div class="grid grid-cols-1 gap-5">
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="pb-0 card-body">
                <h4 class="text-gray-700 text-15 dark:text-gray-100">Basic Form</h4>
            </div>

            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-6">
                    <div class="card-body">


                        <div class="mt-10">
                            <h5 class="text-sm text-gray-700 dark:text-gray-100"><i
                                    class="mr-1 mdi mdi-arrow-right text-violet-500"></i> Inline forms layout</h5>

                            <form class="mt-5 " wire:submit.prevent="submit()">
                                <div class="grid items-center grid-cols-12 gap-4">
                                    <div class="col-span-12 lg:col-span-4">
                                        <input type="text"
                                            class="w-full border-gray-100 rounded placeholder:text-sm dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100"
                                            id="specificSizeInputName" wire:model='name' placeholder="Enter Name">
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <div
                                            class="flex items-center border rounded bg-gray-50 dark:border-zinc-600 dark:bg-zinc-600">
                                            <div class="px-4 input-group-text dark:text-zinc-100">@</div>
                                            <input type="text"
                                                class="w-full border-0 border-l border-gray-100 placeholder:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100"
                                                id="specificSizeInputGroupUsername" wire:model='username'
                                                placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="form-check">
                                            <input type="checkbox"
                                                class="align-middle rounded focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-400 dark:checked:bg-violet-500"
                                                id="formrow-customCheck">
                                            <label class="text-gray-700 dark:text-zinc-100" for="autoSizingCheck2">
                                                Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <button type="submit"
                                            class="text-white border-transparent btn bg-violet-500 hover:bg-violet-700 focus:bg-violet-700 focus:ring focus:ring-violet-50">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
