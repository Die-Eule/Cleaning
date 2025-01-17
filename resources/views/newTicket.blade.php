<x-app-layout>
    <div class="flex items-center flex-col mt-10">    
        <div class="w-[80%] flex justify-between">
            <div>
                <x-input-label for="text" :value="__('Укажите свой точный адрес')" />
                <input
                    name="address"
                    placeholder="Молодогвардейцев, 58А, 42"
                    cols="80" rows="5"
                    maxlength="150" minlength="5"
                    required class="border-sky-300 bg-white border-[3px] rounded-lg w-[80%] h-[40%] text-sm">
            </div>

            <div>
                <x-input-label for="text" :value="__('Выберите услугу')" />
                <select
                    name="address"
                    placeholder="Молодогвардейцев, 58А, 42"
                    cols="80" rows="5"
                    maxlength="150" minlength="5"
                    required class="border-sky-300 bg-white border-[3px] rounded-lg w-[80%] h-[40%] text-sm">
                </select>
            </div>
            
            <div>
                <x-input-label for="text" :value="__('Укажите желаемую дату')" />
                <input
                    name="address"
                    placeholder="Молодогвардейцев, 58А, 42"
                    cols="80" rows="5"
                    maxlength="150" minlength="5"
                    required class="border-sky-300 bg-white border-[3px] rounded-lg w-[80%] h-[40%] text-sm">
            </div>

            <div>
                <x-input-label for="text" :value="__('Выберите тип оплаты')" />
                <select
                    name="address"
                    placeholder="Молодогвардейцев, 58А, 42"
                    cols="80" rows="5"
                    maxlength="150" minlength="5"
                    required class="border-sky-300 bg-white border-[3px] rounded-lg w-[80%] h-[40%] text-sm">
                </select>
            </div>
        </div>

        <div class="w-[80%] flex justify-between">

            <div>
                <x-input-label for="text" :value="__('Укажите свои контактные данные')" />
                <input
                    name="address"
                    placeholder="Молодогвардейцев, 58А, 42"
                    cols="80" rows="5"
                    maxlength="150" minlength="5"
                    required class="border-sky-300 bg-white border-[3px] rounded-lg w-[72%] h-[45%] text-sm">
                </input>
            </div>
        </div>


        <div class="w-[20%] flex mt-24 justify-between">
            <form method="GET" action="{{ route('dashboard') }}">
                <button class="p-6 text-[#FFFFFF] bg-[#38CAFF] rounded-md p-3 hover:bg-[#22A5D4] transition" type="submit">Отмена</button>
            </form>

            <form method="GET" action="{{ route('dashboard') }}">
                <button class="p-6 text-[#FFFFFF] bg-[#38CAFF] rounded-md p-3 hover:bg-[#22A5D4] transition" type="submit">создать заявку</button>
            </form>
        </div>

    </div>
</x-app-layout>