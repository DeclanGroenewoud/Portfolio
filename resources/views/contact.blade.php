<x-layouts.base>
    <x-slot:heading>
        <h1  class="text-3xl font-bold tracking-tight text-gray-900">Contact pagina</h1>
    </x-slot:heading>
    <x-text :standard="true" class="w-1/2 my-4">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, n
        ecessitatibus nemo soluta reprehenderit asperiores at non
        praesentium pariatur ipsam porro quod quaerat ab veniam tempore
        alias eligendi aliquid tempora? quas, fugit laborum 
        ut illo cum quae magni id.
    </x-text>
    <form action="/contact" method="POST">
        @csrf

        <div class="flex gap-3 mb-3">
            <label for="name" class="w-20">Name:</label>
            <input type="text" id="name" name="name" required style="border: 1px solid black;">
        </div>

        <div class="flex gap-3 mb-3">
            <label for="email" class="w-20">Email:</label>
            <input type="email" id="email" name="email" required style="border: 1px solid black;">
        </div>

        <div class="flex gap-3 mb-3">
            <label for="message" class="w-20">Message:</label>
            <textarea id="message" name="message" required style="border: 1px solid black;"></textarea>
        </div>

        <button type="submit" class="bg-green-200 py-2 px-2 rounded-xl">Verzend</button>
    </form>
</x-layouts.base>