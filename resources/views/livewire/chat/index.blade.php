<div class="fixed h-full flex bg-purple  lg:shadow-sm overflow-hidden inset-0 lg:top-16  m-auto lg:h-[90%] rounded-lg">
    <div class="relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full border bg-fuchsia-950 rounded-lg">
        @include('livewire.chat.chat-list')
    </div>
    <div class="hidden md:grid w-full  bg-gradient-to-tl from-pink-600 to-violet-600 rounded-lg  opacity-100 h-full relative overflow-y-auto rounded-lg" style="contain: content">
        <div class="m-auto text-center justify-center flex flex-col gap-3">
           <h4 class="font-medium text-lg text-zinc-50">Choose a conversation to start chatting.</h4>
        </div>
    </div>
</div>
