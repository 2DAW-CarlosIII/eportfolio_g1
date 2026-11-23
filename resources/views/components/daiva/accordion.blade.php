@php
    $preguntas = [
        'How does it work?' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi laboriosam vitae reiciendis corrupti! Explicabo, libero reiciendis iste ipsa voluptatem, cupiditate ab culpa expedita asperiores at quasi laborum tempore magnam corrupti.',
        'What the lorem?' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum ratione expedita possimus inventore in. Explicabo, quasi repellendus a dolore totam laudantium, molestias quis reiciendis rerum vero, numquam sint earum voluptatum?',
        'Can I cancel my subscription?' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ex cum repellendus eligendi maxime magni molestiae saepe beatae, excepturi id dolores recusandae ea perferendis repudiandae? Ea deleniti blanditiis quae iusto!',
        'is it safe?' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat aspernatur iste ab optio magni veritatis voluptatibus quaerat. Error ipsam dolore, explicabo consequatur incidunt rem culpa, est corporis nihil necessitatibus cum!',
        'Can I use 2 account?' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est placeat veritatis ex perspiciatis, incidunt, quos quia accusantium recusandae aspernatur inventore nulla, esse aut expedita numquam rem! Quibusdam deleniti magni rerum.',
        'Is it a free service?' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, consequuntur optio tempore voluptatibus quae commodi voluptate excepturi pariatur vitae odit eius placeat dicta cum, culpa quod similique, incidunt delectus est.',
    ];
@endphp

<div class="relative w-full mx-auto font-normal lg:col-span-2" x-data="{
                                    activeAccordion: '',
                                    setActiveAccordion(id) {
                                    this.activeAccordion = (this.activeAccordion == id) ? '' : id
                                    }
                                    }">
@foreach ($preguntas as $pregunta => $respuesta)
    <div class="cursor-pointer group text-gray-600 hover:text-zinc-500"
        x-data="{ id: $id('accordion') }"
        :class="{ 'text-zinc-900': activeAccordion==id, 'text-gray-600 hover:text-zinc-500': activeAccordion!=id }">
        <button
            class="cursor-pointer flex items-center justify-between w-full p-4 px-0 pb-1 text-sm text-left select-none lg:text-base"
            @click="setActiveAccordion(id)">
            <span>{{ $pregunta }}</span>
            <svg class="w-5 h-5 duration-300 ease-out text-zinc-500" fill="none" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="1.5"
                :class="{ '-rotate-[45deg]': activeAccordion==id }">
                <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
        <div x-show="activeAccordion==id" x-cloak x-transition>
            <div class="p-4 pt-2 text-sm text-gray-500">
                {{ $respuesta }}
            </div>
        </div>
    </div>
@endforeach                    
</div>