<x-layouts.base>
    <x-slot:heading>
        Welkom bij mijn portfolio!
    </x-slot:heading>
    <section class="flex gap-4 items-start">
        <x-text :standard="true" class="w-1/3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, n
            ecessitatibus nemo soluta reprehenderit asperiores at non
            praesentium pariatur ipsam porro quod quaerat ab veniam tempore
            alias eligendi aliquid tempora? <span class="text-red-600 font-bold">Quod eius similique</span> quas, fugit laborum 
            ut illo cum quae magni id. Molestias, cum nostrum adipisci ab mollitia, minus nam non vero 
            esse assumenda reiciendis itaque totam quas libero quo at ad nulla voluptatibus? Commodi, hic inventore assumenda
            perferendis minus beatae molestiae nihil aperiam quam molestias aliquid ab sed blanditiis nisi porro magnam, adipisci, 
            ipsum asperiores et.<span class="text-red-600 font-bold">Eos dolores aut soluta corrupti</span> quiipsam aspernatur quod ab possimus nesciunt iusto 
            ea explicabo voluptas quos placeat. Deserunt, voluptas? Repellendus totam natus dignissimos deserunt v
            oluptatem.
        </x-text>

        <div class="w-2/3">
            <x-text :standard="false">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, n
            ecessitatibus nemo soluta reprehenderit asperiores at non
            praesentium pariatur ipsam porro quod quaerat ab veniam tempore
            alias eligendi aliquid tempora? Quod eius similique quas, fugit laborum 
            ut illo.
            </x-text>

            <img class="mt-4" src="https://picsum.photos/id/237/400/300" alt="random img">
        </div>
    </section>
</x-layouts.base>
