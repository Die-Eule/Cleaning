<x-app-layout>
    <div class="flex items-center flex-col mt-10">
        <div class="p-6 text-gray-900 dark:text-gray-100">
        <form method="GET" action="{{ route('newTicket') }}">
            <button class="p-6 text-[#FFFFFF] bg-[#38CAFF] rounded-md p-3 hover:bg-[#22A5D4] transition" type="submit">создать заявку</button>
        </form>
        </div>
        @foreach ($tickets as $ticket)
        <div class="border-[3px] rounded-lg border-sky-300 w-[82%] mb-5 p-1 bg-white">
            <div class="grid grid-cols-1 lg:grid-cols-[14rem_10rem_8rem_minmax(0,1fr)_15rem_10rem_minmax(0,1fr)] font-medium">
                <p class="px-1 py-3">{{ $ticket->name }}</p>
                <p class="px-1 py-3">{{ $ticket->date }}</p>
                <p class="px-1 py-3">{{ $ticket->tel }}</p>
                <p class="px-1 py-3">{{ $ticket->email }}</p>
                <p class="px-1 py-3">{{ $ticket->service }}</p>
                <p class="px-1 py-3">{{ $ticket->payment }}</p>
                <p class="px-1 py-3 text-right">{{ $ticket->status }}</p>
            </div>
        </div>
        @endforeach
    </div>

</x-app-layout>
