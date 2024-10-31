<div
 x-data="{type:'all'}"
 class="flex flex-col transition-all h-full overflow-hidden">
    <header class="px-3 z-10 bg-fuchsia-950 sticky top-0 w-full py-2">
        <div class="border-b justify-between flex items-center pb-2">
            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl text-white">Chats</h5>
            </div>
            <button>
                <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"  viewBox="0 0 16 16">
                    <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5"/>
                </svg>
            </button>
        </div>
        {{-- Filters --}}
        <div class="flex gap-3 items-center overflow-x-scroll p-2 bg-fuchsia-950" style="scrollbar-width: none;">
            <button @click="type='all'" :class="{'bg-indigo-400 border-indigo-400  text-black':type=='all'}" class="inline-flex justify-center item-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border text-white border transition-all duration-150 ease-in-out focus:outline-none">
                All
            </button>
            <button @click="type='deleted'" :class="{'bg-indigo-400 border-indigo-400 text-black':type=='deleted'}" class="inline-flex justify-center item-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border text-white border transition-all duration-150 ease-in-out focus:outline-none">
                Deleted
            </button>
        </div>
    </header>
    <main class="overflow-y-scroll overflow-hidden grow h-full relative" style="contain: content; scrollbar-width: none;">
        {{-- Chat list --}}
        <ul class="p-2 grid w-full spacey-y-2">
            <li class="py-3 hover:bg-indigo-400 rounded-2xl dark:hover:bg-indigo-400 transition-colors duration-150 flex gap-4 relative w-full cursor-pointer px-2 ">
                <a href="#" class="shrink-0">
                    <x-avatar/>
                </a>
                <aside class="grid grid-cols-12 w-full">
                    <a href="#" class="col-span-11 border-b pb-2 relative overflow-hidden truncate leading-5 w-full flex-nowrap p-1">
                        {{-- Name and date --}}
                        <div class="flex justify-between w-full items-center">
                            <h6 class="truncate font-medium tracking-wider text-white">John Doe</h6>
                            <small class="text-white">5d</small>
                        </div>
                        {{-- Message body --}}
                        <div class="flex gap-x-2 items-center">
                            {{-- Delivered --}}
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                            </span>
                            {{-- Sent --}}
                            {{-- <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                                  </svg>
                            </span> --}}
                            {{-- Message --}}
                            <p class="grow truncate text-sm font-[100] text-white">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, possimus doloremque? Illo omnis animi placeat, nihil, ipsam voluptas beatae ipsa perferendis quas, a quae porro nisi est cumque dolore architecto?
                            </p>
                            {{-- Message count --}}
                            <span class="font-bold p-px px-2 text-xs shrink-0 rounded-full bg-gradient-to-tl from-pink-600 to-violet-600  text-white">1</span>
                        </div>
                    </a>
                    {{--Actions Dropdown --}}
                    <div class="col-span-1 flex flex-col text-center my-auto">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                      </svg>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-full p-1">
                                    <button class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-white hover:bg-indigo-400 transition-all duration-150 ease-in-out focus:outline-none focus:bg-indigo-400">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                              </svg>
                                        </span>
                                        View Profile
                                    </button>
                                    <button class="items-center gap-3 flex w-full px-4 py-2 text-left text-sm leading-5 text-white hover:bg-indigo-400 transition-all duration-150 ease-in-out focus:outline-none focus:bg-indigo-400">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                              </svg>
                                        </span>
                                        Delete
                                    </button>
                                </div>

                            </x-slot>
                        </x-dropdown>

                    </div>
                </aside>
            </li>

        </ul>

    </main>
</div>
